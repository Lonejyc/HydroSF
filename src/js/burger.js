function toggleMenu() {
    const nav = document.querySelector('.container');
    const burger = document.querySelector('.burger');
    const navLink = document.querySelectorAll('.nav-menu-list > li');

    burger.addEventListener('click', () => {
        nav.classList.toggle('show_nav');
    });
    navLink.forEach((link) => {
        link.addEventListener('click', () => {
            nav.classList.remove('show_nav');
        });
    });
}
toggleMenu();