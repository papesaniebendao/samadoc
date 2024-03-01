document.addEventListener("DOMContentLoaded", function() {
    const openModalLink = document.getElementById("openModal");
    const modalOverlay = document.getElementById("modal");
    const header = document.querySelector("header");

    openModalLink.addEventListener("click", function(event) {
        event.preventDefault();
        modalOverlay.style.display = "flex";
    });

    modalOverlay.addEventListener("click", function(event) {
        if (event.target === modalOverlay) {
            modalOverlay.style.display = "none";
        }
    });

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


document.addEventListener("DOMContentLoaded", function() {
    var boutonEnregistrer = document.querySelector(".Enregister");
    var boutonAppliquer = document.querySelector("#formulaire-disponibilite button");
    var fenetreModale = document.getElementById("fenetreModale");
    var boutonFermerModale = document.getElementById("boutonFermerModale");

    boutonEnregistrer.addEventListener("click", function() {
        fenetreModale.style.display = "flex";
    });

    boutonAppliquer.addEventListener("click", function() {
        fenetreModale.style.display = "flex";
    });

    boutonFermerModale.addEventListener("click", function() {
        fenetreModale.style.display = "none";
    });
});

