// Sélectionnez le bouton de fermeture
const closeBtn = document.querySelector('.close');

// Ajoutez un gestionnaire d'événements pour fermer la fenêtre modale lorsque le bouton de fermeture est cliqué
closeBtn.addEventListener('click', function () {
    const modal = document.getElementById('modal');
    modal.style.display = 'none';
});

// Ajoutez également un gestionnaire d'événements pour fermer la fenêtre modale lorsque le bouton "Annuler" est cliqué
const boutonRetourModification = document.getElementById('annuler-modification');
boutonRetourModification.addEventListener('click', function () {
    const modal = document.getElementById('modal');
    modal.style.display = 'none';
});

// Sélectionnez tous les boutons "Modifier" et ajoutez un gestionnaire d'événements pour chacun
const boutonModifier = document.querySelectorAll('.modifier');

boutonModifier.forEach(function (bouton) {
    bouton.addEventListener('click', function () {
        // Obtenez l'identifiant unique associé à cet élément
        const id = bouton.getAttribute('data-id');
        
        // Affichez la fenêtre modale avec le formulaire de modification correspondant à cet identifiant
        const modal = document.getElementById('modal');
        modal.style.display = 'block';

        // Mettez à jour le formulaire avec les données de l'élément correspondant à cet identifiant
        const element = getElementById(id); // Vous devez créer une fonction pour obtenir l'élément correspondant à partir de votre source de données
        document.getElementById('nom').value = element.nom; // Mettez à jour les valeurs des champs du formulaire
        document.getElementById('prenom').value = element.prenom;
        document.getElementById('image').value = element.image;
    });
});

// Sélectionnez tous les boutons "Modifier" et ajoutez un gestionnaire d'événements pour chacun
const boutonsModifier = document.querySelectorAll('.modifier');
boutonsModifier.forEach(function (bouton) {
    bouton.addEventListener('click', function () {
        // Affichez le formulaire de modification lorsqu'un bouton "Modifier" est cliqué
        const formulaireModification = document.getElementById('modification');
        formulaireModification.classList.remove('cache');
    });
});

// Sélectionnez le formulaire et les boutons pertinents
const formulaireModification = document.getElementById('formulaire-modification');
const boutonAnnulerModification = document.getElementById('annuler-modification');

// Ajoutez un gestionnaire d'événements pour le formulaire de modification
formulaireModification.addEventListener('submit', function (e) {
    e.preventDefault(); // Empêche la soumission par défaut du formulaire

    // Récupérez les valeurs des champs du formulaire
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const image = document.getElementById('image').value;

    // Vous pouvez maintenant mettre à jour les informations de l'utilisateur dans votre structure de données ou effectuer une requête pour mettre à jour la base de données, selon votre application.

    // Une fois les informations mises à jour, vous pouvez cacher à nouveau le formulaire de modification
    formulaireModification.classList.add('cache');
});

// Ajoutez un gestionnaire d'événements pour le bouton "Annuler"
boutonAnnulerModification.addEventListener('click', function () {
    // Cacher le formulaire de modification
    formulaireModification.classList.add('cache');
});

// Fonction pour confirmer la suppression
function confirmerSuppression(boutonSupprimer) {
    // Utilisation de la boîte de dialogue native de JavaScript
    if (confirm("Êtes-vous sûr de vouloir supprimer ce prestataire ?")) {
        // Si l'utilisateur clique sur "Oui" (true), supprimez le prestataire
        supprimerPrestataire(boutonSupprimer);
    }
}

// Fonction pour supprimer effectivement le prestataire
function supprimerPrestataire(boutonSupprimer) {
    // Obtenez une référence au parent de la div .medecin pour supprimer l'ensemble du bloc
    const parentDiv = boutonSupprimer.parentElement;
    
    // Supprimez le parentDiv pour supprimer le prestataire de la liste
    parentDiv.remove();
    
    // Vous pouvez également ajouter du code pour effectuer une suppression côté serveur ici.
}
