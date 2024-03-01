import { gsap } from "gsap/all";
{
	const docEl = document.documentElement;
	const body = document.body;

	// helper functions
	const MathUtils = {
		lerp: (a, b, n) => (1 - n) * a + n * b,
		distance: (x1, y1, x2, y2) => Math.hypot(x2 - x1, y2 - y1),
	};

	// get the mouse position
	const getMousePos = (ev) => {
		const imgsHover = document.querySelector(".imgs_hover");
  		const rect = imgsHover.getBoundingClientRect();

		let posx = 0;
		let posy = 0;

		if (!ev) return;
		if (ev.pageX || ev.pageY) {
			posx = ev.pageX - rect.left;
    		posy = ev.pageY - rect.top;
		} else if (ev.clientX || ev.clientY) {
			posx = ev.clientX - rect.left + body.scrollLeft + docEl.scrollLeft;
    		posy = ev.clientY - rect.top + body.scrollTop + docEl.scrollTop;
		}
		return { x: posx, y: posy };
	};

	let lastMousePos = { x: 0, y: 0 };
	let cacheMousePos = { x: 0, y: 0 };
	let mousePos = (lastMousePos = cacheMousePos = { x: 0, y: 0 });

	// update the mouse position
	window.addEventListener("mousemove", (ev) => (mousePos = getMousePos(ev)));

	const getMouseDistance = () =>
		MathUtils.distance(mousePos.x, mousePos.y, lastMousePos.x, lastMousePos.y);

	class Image {
		constructor(el) {
			this.DOM = { el: el };
			this.defaultStyle = {
				scale: 1,
				x: 0,
				y: 0,
				opacity: 0,
			};
			this.getRect();
		}

		getRect() {
			this.rect = this.DOM.el.getBoundingClientRect();
		}
		isActive() {
			return gsap.isTweening(this.DOM.el) || this.DOM.el.style.opacity != 0;
		}
	}

	class ImageTrail {
		constructor() {
			this.DOM = { content: document.querySelector(".imgs_hover") };
			this.images = [];
			[...this.DOM.content.querySelectorAll("img")].forEach((img) =>
				this.images.push(new Image(img))
			);
			this.imagesTotal = this.images.length;
			this.imgPosition = 0;
			this.zIndexVal = 1;
			this.threshold = 100;
			requestAnimationFrame(() => this.render());
		}
		render() {
			let distance = getMouseDistance();
			cacheMousePos.x = MathUtils.lerp(
				cacheMousePos.x || mousePos.x,
				mousePos.x,
				0.1
			);
			cacheMousePos.y = MathUtils.lerp(
				cacheMousePos.y || mousePos.y,
				mousePos.y,
				0.1
			);

			if (distance > this.threshold) {
				this.showNextImage();

				++this.zIndexVal;
				this.imgPosition =
					this.imgPosition < this.imagesTotal - 1 ? this.imgPosition + 1 : 0;

				lastMousePos = { ...mousePos };
			}

			let isIdle = true;
			for (let img of this.images) {
				if (img.isActive()) {
					isIdle = false;
					break;
				}
			}
			if (isIdle && this.zIndexVal !== 1) {
				this.zIndexVal = 1;
			}
			
			requestAnimationFrame(() => this.render());
		}
		showNextImage() {
			const img = this.images[this.imgPosition];
			gsap.killTweensOf(img.DOM.el);
			
			var tl = gsap.timeline();

			tl.fromTo(
			img.DOM.el,
			{
				opacity: 0,
				scale: 1,
				zIndex: this.zIndexVal,
				x: cacheMousePos.x - img.rect.width / 2,
				y: cacheMousePos.y - img.rect.height / 2
			},
			{
				duration: 0,
				opacity: 1,
				scale: 1,
				x: cacheMousePos.x - img.rect.width / 2,
				y: cacheMousePos.y - img.rect.height / 2
			}
			);

			tl.to(
			img.DOM.el,
			{
				duration: 0.9,
				ease: "expo.out",
				x: mousePos.x - img.rect.width / 2,
				y: mousePos.y - img.rect.height / 2
			},
			0
			);

			tl.to(
			img.DOM.el,
			{
				duration: 1,
				ease: "power2.out",
				opacity: 0
			},
			0.4
			);

			tl.to(
			img.DOM.el,
			{
				duration: 1,
				ease: "power2.out",
				scale: 0,
			},
			0.4
			);
		}
	}

	// preload images
	const ImagesLoaded = require('imagesloaded');
	const preloadImages = () => {
		return new Promise((resolve, reject) => {
		  let imgLoad = new ImagesLoaded(document.querySelectorAll(".img_hover"));
		  imgLoad.on('always', resolve);
		});
	  };
	
	  preloadImages().then(() => {
		console.log("Toutes les images ont été préchargées avec succès.");
		new ImageTrail();
	  }).catch((err) => {
		console.error("Erreur lors du préchargement des images :", err);
	  });
}
