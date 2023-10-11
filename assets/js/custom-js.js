document.addEventListener("DOMContentLoaded", () => {
    // Hamburger Menu

    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".mobile-ul");
    const body = document.body; // Get the body element
    const mainContent = document.querySelector("main");
    const footer = document.querySelector("footer");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
        body.classList.toggle("no-scroll");

        mainContent.classList.toggle("hidden");
        footer.classList.toggle("hidden");
    });

    const menuLinks = document.querySelectorAll(".mobile-ul a");

    menuLinks.forEach((link) => {
        link.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
            body.classList.remove("no-scroll");

            mainContent.classList.remove("hidden");
            footer.classList.remove("hidden");
        });
    });

    const adminHamburgerMobile = document.querySelector(".admin-hamburger-mobile");
    const adminHamburger = document.querySelector(".admin-hamburger");
    const adminHeader = document.querySelector(".admin-header");
    const adminHeaderMobile = document.querySelector(".admin-header-mobile");
});

document.addEventListener("DOMContentLoaded", function () {
    const adminHamburgerMobile = document.querySelector(".admin-hamburger-mobile");
    const adminHamburger = document.querySelector(".admin-hamburger");
    const adminHeader = document.querySelector(".admin-header");
    const adminHeaderMobile = document.querySelector(".admin-header-mobile");

    adminHamburger.addEventListener("click", function () {
        adminHeader.classList.toggle("active");
        adminHeaderMobile.classList.toggle("active");
    });

    adminHamburgerMobile.addEventListener("click", function () {
        adminHeader.classList.toggle("active");
        adminHeaderMobile.classList.toggle("active");
    });
});

function confirmDelete() {
    return confirm('Are you sure you want to delete this item?');
}