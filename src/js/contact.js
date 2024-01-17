import { gsap } from "gsap";
let coordEl = document.querySelector('.coord');
let buttonEl = document.querySelector('.plus');

buttonEl.addEventListener('click', function() {
    coordEl.classList.toggle('active');
    if (coordEl.classList.contains('active')) {
        gsap.to('.sec', {duration: .4, height: 'auto'});
    } else {
        gsap.to('.sec', {duration: .4, height: 0});
    }
});