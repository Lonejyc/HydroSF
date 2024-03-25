function toggleMenu() {
    const nav = document.querySelector('.container');
    const burger = document.querySelector('.burger');
    const navLink = document.querySelectorAll('.nav-menu-list > li');
    const body = document.querySelector('body');

    burger.addEventListener('click', () => {
        nav.classList.toggle('show_nav');
        body.classList.toggle('overflow-hidden');
    });
    navLink.forEach((link) => {
        link.addEventListener('click', () => {
            nav.classList.remove('show_nav');
            body.classList.remove('overflow-hidden');
        });
    });
}
toggleMenu();