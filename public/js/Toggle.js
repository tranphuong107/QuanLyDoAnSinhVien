function menuToggle() {
    const toggleMenu = document.querySelector('.sidebar');
          main = document.querySelector('.main');
    const pageLogo = document.querySelector('.page-logo');
    toggleMenu.classList.toggle('active');
    main.classList.toggle('active');
    pageLogo.classList.toggle('active');
}