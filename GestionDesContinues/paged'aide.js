document.getElementById('monBouton').addEventListener('click', function() {
    var confirmer = confirm("Voulez-vous enregistrer ?");
    if (confirmer) {
        alert("Enregistrement effectué !");
    }
});
