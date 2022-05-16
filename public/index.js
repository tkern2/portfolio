const menuButton = document.querySelector('button.menu-button');
const mobileMenu = document.querySelector('div.mobile-menu');

menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});