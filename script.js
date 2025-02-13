// Navbar color change on scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});


document.addEventListener("DOMContentLoaded", () => {
    let navLinks = document.querySelectorAll(".nav-link");
    window.addEventListener("scroll", () => {
        let current = "";
        document.querySelectorAll("section").forEach(section => {
            if (window.scrollY >= section.offsetTop - 50) {
                current = section.getAttribute("id");
            }
        });
        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href").includes(current)) {
                link.classList.add("active");
            }
        });
    });
});
