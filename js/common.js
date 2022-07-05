function scrollFunction() {
    if (document.body.scrollTop > 32 || document.documentElement.scrollTop > 32) {
        header.classList.add('shrink');
    } else {
        header.classList.remove('shrink');
    }
}

const header = document.querySelector("header");
window.onscroll = function() {scrollFunction()};
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
