// script.js
//recuperation des terme a recherche
const Terme_a_rechercher = document.getElementById('search-input');
const Bouton_de_recherche = document.getElementById('search-button');
const Resultat_de_recherche = document.getElementById('search-results');
const LienClick=document.getElementById('LienService');

//recuperation des champs de liens de services
const LienMedecin = document.getElementById('medecin');
const LienChirurgien = document.getElementById('chirurgien');
const LienDentiste = document.getElementById('dentiste');
const LienOphtalmologue = document.getElementById('ophtalmologue');
const LienDermatologue = document.getElementById('dermatologue');
const LienPediatre = document.getElementById('pediatre');

//Masquage des champs de liens de services
LienClick.style.display="none";
LienMedecin.style.display="none";
LienChirurgien.style.display="none";
LienDentiste.style.display="none";
LienOphtalmologue.style.display="none";
LienDermatologue.style.display="none";
LienPediatre.style.display="none"; 


//LienClick.style.display="block";


const inputRecherche = document.getElementById('search-input');
const BoitesSuggestions = document.getElementById('suggestions');

const suggestions = ['Chirurgien', 'Dentiste', 'Pédiatre', 'Dermatologue', 'Ophtalmologue' , 'Médecin généraliste'];

inputRecherche.addEventListener('input', function() {
	const searchText = inputRecherche.value.toLowerCase();
	const filteredSuggestions = suggestions.filter(suggestion => suggestion.toLowerCase().includes(searchText));
	
	// Effacer les suggestions précédentes
	BoitesSuggestions.innerHTML = '';

	// Afficher les suggestions filtrées
	filteredSuggestions.forEach(suggestion => {
		const suggestionElement = document.createElement('div');
		suggestionElement.textContent = suggestion;
		suggestionElement.classList.add('suggestion');
		BoitesSuggestions.appendChild(suggestionElement);
	});

	// Cacher les suggestions si la barre de recherche est vide
	if (searchText === '') {
		BoitesSuggestions.innerHTML = '';
	}
});
// FONCTION DE RECHERCHE DE SERVICE

Bouton_de_recherche.addEventListener('click', fonction_de_recherche);//le fait de cliquer sur rechercher engendre l'appel de la fonction  fonction_de_recherhe
const tableau_services = ['Médecin généraliste' , 'Dentiste' , 'Ophtalmologue' , 'Chirurgien' , 'Dermatologue' , 'Pédiatre'];










function fonction_de_recherche () {
    const searchTerm = Terme_a_rechercher.value.trim();
    
    if(searchTerm == 'Médecin généraliste' || searchTerm == 'médecin généraliste'){
        Resultat_de_recherche.innerHTML = `Ce service est disponible..` ;       
        
         document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
    var lien = document.getElementById('LienService');
    LienClick.style.display="block";
    lien.addEventListener("click", function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)

        // Rediriger vers une autre page HTML
        window.location.href = "../CenlendrierDeReservation/MedecinGeneral.html";
    });
      });
      }else{
        if(searchTerm == 'Dentiste' || searchTerm == 'dentiste'){
            Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
            
        document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
        var lien = document.getElementById('LienService');
        LienClick.style.display="block";
        lien.addEventListener("click", function(event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)
    
            // Rediriger vers une autre page HTML
            window.location.href = "../CenlendrierDeReservation/Dentiste.html";
        });
    });      
    }else{

    if(searchTerm == 'Ophtalmologue' || searchTerm == 'ophtalmologue'){
        Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
        
document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
    var lien = document.getElementById('LienService');
    LienClick.style.display="block";
    lien.addEventListener("click", function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)

        // Rediriger vers une autre page HTML
        window.location.href = "../CenlendrierDeReservation/Ophtalmologue.html";
    });
});
 }else{

 if(searchTerm == 'Chirurgien' || searchTerm == 'chirurgien'){
    Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
    
document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
var lien = document.getElementById('LienService');
LienClick.style.display="block";
lien.addEventListener("click", function(event) {
    event.preventDefault(); // Empêche la redirection automatique

    // prendre lq nouvelle direction
    window.location.href = "../CenlendrierDeReservation/Chirurgien.html";
});
});
 }else{

 if(searchTerm == 'Dermatologue' || searchTerm == 'dermatologue'){
    Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
    
document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
var lien = document.getElementById('LienService');
LienClick.style.display="block";
lien.addEventListener("click", function(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)

    // Rediriger vers une autre page HTML
    window.location.href = "../CenlendrierDeReservation/Dermatologue.html";
});
});}else{

if(searchTerm == 'Pédiatre' || searchTerm == 'pédiatre'){
    Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
    
document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
var lien = document.getElementById('LienService');
LienClick.style.display="block";
lien.addEventListener("click", function(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)

    // Rediriger vers une autre page HTML
    window.location.href = "../CenlendrierDeReservation/Pediatre.html";
});
});}else{

if(searchTerm == 'Wave'){
    Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
    
document.addEventListener('click', function() {
var lien = document.getElementById('LienService');
LienClick.style.display="block";
lien.addEventListener("click", function(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)

    // Rediriger vers une autre page HTML
    window.location.href = "../CenlendrierDeReservation/";
});
});}else{

if(searchTerm == 'OrangeMoney'){
    Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
    
document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
var lien = document.getElementById('LienService');
LienClick.style.display="block";
lien.addEventListener("click", function(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)

    // Rediriger vers une autre page HTML
    window.location.href = "../CenlendrierDeReservation/.html";
});
});}else{


if(searchTerm == 'FreeMoney'){
    Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
    
document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
var lien = document.getElementById('LienService');
LienClick.style.display="block";
lien.addEventListener("click", function(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)

    // Rediriger vers une autre page HTML
    window.location.href = "../CenlendrierDeReservation/.html";
});
});}else{


if(searchTerm == 'OneTouch'){
    Resultat_de_recherche.innerHTML = `Ce service est disponible.` ;       
    
document.addEventListener(/*"DOMContentLoaded"*/'click', function() {
var lien = document.getElementById('LienService');
LienClick.style.display="block";
lien.addEventListener("click", function(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien (redirection)

    // Rediriger vers une autre page HTML
    window.location.href = "../CenlendrierDeReservation/.html";
});
});}else{
    

Resultat_de_recherche.innerHTML = 'Ce service n\'est pas disponible!';
            }
           }
        }
    }
}
}
 }
}
    }
}
}

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











