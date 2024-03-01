
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="specialite.css">
    <title>Specialite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="section first-section">
   
        <header class="header" id="header">
            <div class="Mon-logo"><a id=pageAccueil href="#">SamaDoc</a></div>
            <nav>
                <ul>
                    <li><i class="fas fa-question-circle"></i><a href="#" id="openModal">Centre d'aide</a></li>
                    <li><a href="../Apropos/A_propos.html" id="Apropos">A propos</a></li>
                    <li></a href=#>Vous êtes medecin ?</a></li>
                </ul>
            </nav>
        </header>
        <!-- Contenu de la première section -->
    </section>
    <?php
    include("../connexionDB.php");
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if (isset($_SESSION['specialite-trouvee'])) {
        $specialite = $_SESSION['specialite-trouvee'];
        
        $query = $connexion->prepare("SELECT id, nom, prenom, email, adresse, specialite FROM msmedecins WHERE specialite = :specialite");
        $query->bindParam(':specialite', $specialite);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        
        if ($res) {
            echo '<div class="corps">';
            echo '<h2>Résultats:</h2>';
            
            foreach ($res as $medecin) {
                echo '<div class="part1">';
                echo '<img src="../Pictures/img1.jfif" width="100" height="100">';
                echo '<div class="info">';
                echo '<h3>' . $medecin['nom'] . ' ' . $medecin['prenom'] . '</h3>';
                echo '<address>' . $medecin['adresse'] . '</address>';
                // Ajoutez un lien avec l'ID du médecin en tant que paramètre
                echo '<div class="rv"><a href="infoMedecin.php?id=' . $medecin['id'] . '">Prendre rendez-vous</a></div>';
                echo '</div>';

                $_SESSION['id_medecin_choice'] = $medecin['id'];

                
                // ... (votre code existant)
                
                echo '</div>'; // Fermez part1
            }
            
            echo '</div>'; // Fermez corps
        } else {
            echo '<p>Aucun résultat trouvé</p>';
        }
    } else {
        echo '<p>Aucune spécialité trouvée en session</p>';
    }
    ?> 
    <script src="specialite.js"></script>
</body>
</html>