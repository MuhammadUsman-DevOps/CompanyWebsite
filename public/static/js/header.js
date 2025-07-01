document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const serviceMenu = document.querySelector('#service-menu');
    const serviceDropdown = document.querySelector('.service-dropdown-menu');
    const hireTalentMenu = document.querySelector('#hire-talent-menu');
    const hiringDropdown = document.querySelector('.hiring-dropdown-menu');
    const productMenu = document.querySelector('#product-menu'); // use ID like others
    const productDropdown = document.querySelector('.products-dropdown-menu');

    // Toggle hamburger menu and nav links
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('show');
        document.querySelector('.header').classList.toggle('increase-height');
    });

    // Toggle product dropdown on click (mobile only)
    productMenu.addEventListener('click', (e) => {
        if (window.innerWidth <= 900) {
            const isLink = e.target.closest('a');
            if (!isLink) {
                e.preventDefault(); // Only prevent if not clicking a link
                productDropdown.classList.toggle('show');
            }
        }
    });

    // Toggle service dropdown on click (mobile only)
    serviceMenu.addEventListener('click', (e) => {
        if (window.innerWidth <= 900) {
            const isLink = e.target.closest('a');
            if (!isLink) {
                e.preventDefault();
                serviceDropdown.classList.toggle('show');
            }
        }
    });

    // Toggle hiring dropdown on click (mobile only)
    hireTalentMenu.addEventListener('click', (e) => {
        if (window.innerWidth <= 900) {
            const isLink = e.target.closest('a');
            if (!isLink) {
                e.preventDefault();
                hiringDropdown.classList.toggle('show');
            }
        }
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 900) {
            const clickedLink = e.target.closest('a');
            if (
                clickedLink &&
                (serviceDropdown.contains(clickedLink) ||
                    hiringDropdown.contains(clickedLink) ||
                    productDropdown.contains(clickedLink))
            ) {
                return;
            }

            if (!serviceMenu.contains(e.target) && !serviceDropdown.contains(e.target)) {
                serviceDropdown.classList.remove('show');
            }
            if (!hireTalentMenu.contains(e.target) && !hiringDropdown.contains(e.target)) {
                hiringDropdown.classList.remove('show');
            }
            if (!productMenu.contains(e.target) && !productDropdown.contains(e.target)) {
                productDropdown.classList.remove('show');
            }
        }
    });
});
