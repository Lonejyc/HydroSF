import { gsap } from "gsap";


const blocksEl = document.querySelectorAll('.coord');
blocksEl.forEach((blockEl) => {
    let buttonEl = blockEl.querySelector('.plus'),
        contentEl = blockEl.querySelector('.sec');

    buttonEl.addEventListener('click', () => {
        blockEl.classList.toggle('active');
        if(blockEl.classList.contains('active')) {
            gsap.to(contentEl, {duration: .4, height: 'auto', ease: 'power3.inOut'});
        } else {
            gsap.to(contentEl, {duration: .4, height: 0, ease: 'power3.inOut'});
        }
    });
});
