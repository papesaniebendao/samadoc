document.addEventListener("DOMContentLoaded", function() {
    const openModalLink = document.getElementById("openModal");
    const modalOverlay = document.getElementById("modal");

    openModalLink.addEventListener("click", function(event) {
        event.preventDefault();
        modalOverlay.style.display = "flex";
    });

    modalOverlay.addEventListener("click", function(event) {
        if (event.target === modalOverlay) {
            modalOverlay.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header");
    const modalOverlay = document.getElementById("modal");

    window.addEventListener("scroll", function() {
        if (window.scrollY === 0) {
            header.classList.remove("fixed");
        } else {
            header.classList.add("fixed");
            modalOverlay.style.display = "none"; // Masquer la fenêtre modale en cas de défilement
        }
    });

    // Reste du code JavaScript (fenêtre modale)
});
