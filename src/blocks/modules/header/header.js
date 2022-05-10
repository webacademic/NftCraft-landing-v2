const header = document.querySelector('.header'),
    headerMenu = document.querySelector('.header-menu'),
    headerBurger = document.querySelector('.header-burger')

headerBurger.addEventListener('click', () => {
    headerBurger.classList.toggle('active');
    headerMenu.classList.toggle('active');
});

const anchors = document.querySelectorAll('a[href*="#"]');

for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const blockID = anchor.getAttribute('href').substr(1);
        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
        if (headerMenu.classList.contains('active')) {
            headerMenu.classList.remove('active');
            headerBurger.classList.remove('active');
        }
    });
}
if (window.innerWidth > 768) {
    window.addEventListener('scroll', () => {

        if (window.pageYOffset >= 360) {
            header.classList.add('fixed');
        } else {
            header.classList.remove('fixed');
        }
    });
} 
