const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.navLinks');
const links = document.querySelectorAll('.navLinks li');

hamburger.addEventListener('click', () =>{
    navLinks.classList.toggle('open');
    links.forEach(link =>{
        link.classList.toggle('fade');
    });
});