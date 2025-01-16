document.addEventListener("DOMContentLoaded", function () {
    // Handle hover effect for cards
    const cards = document.querySelectorAll(".custom-card");
    cards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.style.boxShadow = "0px 8px 20px rgba(0, 0, 0, 0.2)";
        });
        card.addEventListener("mouseleave", function () {
            this.style.boxShadow = "0px 4px 10px rgba(0, 0, 0, 0.1)";
        });
    });
    
    // Handle missing new arrivals dynamically
    const newArrivalsContainer = document.querySelector(".row");
    if (!newArrivalsContainer || newArrivalsContainer.children.length === 0) {
        const noBooksMessage = document.createElement("div");
        noBooksMessage.classList.add("col-12", "text-center");
        noBooksMessage.innerHTML = `
            <p class="lead">No new arrivals at the moment. Check back later!</p>
        `;
        newArrivalsContainer.appendChild(noBooksMessage);
    }
});

$(document).ready(function () {
    const currentPage = $('body').data('page');
    const mainContent = $('.main-content'); // Target konten utama

    if (currentPage === "shop") {
        // Animasi slide to top hanya pada konten utama
        mainContent.css({ opacity: 0, position: 'relative', top: '50px' }).animate({
            opacity: 1,
            top: '0px'
        }, 1000);
    } else {
        // Animasi fade-in hanya pada konten utama
        mainContent.hide().fadeIn(1000);
    }
});


