/*DOMContentLoaded va permettre au garantir que le code Javascript ne s'execute qu'apres que tout les elements de la page soient disponibles
event.preventDefault() pour empêcher le lien de fonctionner comme un lien standard (c'est-à-dire pour empêcher le navigateur de suivre le lien).
classList.toggle("hidden") pour ajouter ou supprimer la classe hidden au formulaire d'inscription. Si la classe était présente, elle sera supprimée (affichant le formulaire), sinon elle sera ajoutée (cachant le formulaire).
si le formulaire n'est pas cache nous utiliserons window.location.href = "#inscription"; pour faire defiler la page jusqu'au formulaire*/
document.addEventListener("DOMContentLoaded", function () {
    const registerLink = document.querySelector(".register-link");
    const registerForm = document.querySelector("#inscription");

    registerLink.addEventListener("click", function (event) {
        event.preventDefault();
        registerForm.classList.toggle("hidden");
        if (!registerForm.classList.contains("hidden")) {
            window.location.href = "#inscription";
        }
    });

    const acceptTermsCheckbox = document.getElementById("acceptTerms");
    const loginButton = document.getElementById("login-button");

    loginButton.addEventListener("click", function(event) {
        if (!acceptTermsCheckbox.checked) {
            event.preventDefault();
            alert("Veuillez cocher 'j'accepte les conditions d'utilisations'avant de vous connecter.");
        }
    });
});

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

 // Fonction pour afficher la fenêtre modale
 function openWelcomeModal() {
    const welcomeModal = document.getElementById("welcomeModal");
    welcomeModal.style.display = "block";
}

// Appelle la fonction pour ouvrir la fenêtre modale lorsque la page est chargée
window.onload = openWelcomeModal;

    // Fonction pour fermer la fenêtre modale
    function closeWelcomeModal() {
        const welcomeModal = document.getElementById("welcomeModal");
        welcomeModal.style.display = "none";
    }
