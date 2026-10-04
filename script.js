document.addEventListener("DOMContentLoaded", function () {
    // Mobile navigation menu
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    if (menuToggle && navLinks) {
        menuToggle.addEventListener("click", function () {
            const isOpen = navLinks.classList.toggle("open");
            menuToggle.setAttribute("aria-expanded", isOpen);
            menuToggle.textContent = isOpen ? "✕" : "☰";
        });

        navLinks.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                navLinks.classList.remove("open");
                menuToggle.setAttribute("aria-expanded", "false");
                menuToggle.textContent = "☰";
            });
        });
    }

    // Product inquiry buttons
    const productSelect = document.querySelector("#product");

    document.querySelectorAll(".inquiry").forEach(function (button) {
        button.addEventListener("click", function () {
            const productName = button.dataset.product;

            if (productSelect && productName) {
                productSelect.value = productName;
            }
        });
    });

    // Demo contact form
    const contactForm = document.querySelector("#contact-form");
    const formMessage = document.querySelector("#form-message");

    if (contactForm && formMessage) {
        contactForm.addEventListener("submit", function (event) {
            event.preventDefault();

            formMessage.textContent =
                "Thank you for your message! This is a demo form, so your message has not been sent.";
            formMessage.style.display = "block";

            contactForm.reset();
        });
    }
});