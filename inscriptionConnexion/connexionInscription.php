<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexionInscription.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <title>connexionInscription</title>
    <script src="connexionInscription.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div class="background-container">
        <header class="header" id="header">
            <div class="Mon-logo"><a id=pageAccueil href="../index.html">SamaDoc</a></div>
            <nav>
                <ul>
                    <li><i class="fas fa-question-circle"></i><a href="#" id="openModal">Centre d'aide</a></li>
                    <li><a id="Apropos" href="../Apropos/A_propos.html">A propos</a></li>
                    <li><a id="medecin" href="../connexionMedecin/connexionMedecin.php" >Vous êtes medecin ?</a></li>
                    <li><a style="color: white; text-decoration: none" href="../inscriptionConnexion/connexionInscription.php">Se Connecter</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <form class="login-form" action="../model/authentificationUsers.php" method="POST">
                <h2>Se Connecter</h2>
                <input type="email" name="email" class="center-input" placeholder="Adresse e-mail" required>
                <input type="password" name="password" class="center-input" placeholder="Mot de passe" required>
                <label>
                    <input type="checkbox" name="remember"> Se souvenir de moi
                </label>
                <button type="submit">Se Connecter</a></button>
                <a href="forgot-password.html">Mot de passe oublié ?</a>
            </form>
            <p>Vous n'avez pas encore de compte ? <a class="register-link" href="#inscription">S'inscrire</a></p>
            <form id="inscription" class="register-form hidden" action="../model/traitementmsUsers.php" method="POST">
                <h2>S'inscrire</h2>
                <input type="text" name="nom" class="center-input" placeholder="Nom" required>
                <input type="text" name="prenom" class="center-input" placeholder="Prenom" required>
                <input type="email" name="email" class="center-input" placeholder="Votre adresse email" required>
                <input type="email" name="confirm_email" class="center-input" placeholder="Confirmez votre adresse email" required>
                <input type="password" name="password" class="center-input" placeholder="Mot de passe" required>
                <input type="number" name="telephone" class="center-input" placeholder="Telephone" required>
                <button type="submit" id="login-button">S'inscrire</a></button>
            </form>
        </div>
        <!-- Contenu de la première section -->
    </div>

    <!-- Contenu de la fenêtre modale -->
    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <h2>Questions fréquentes - Centre d'aide de l'Hôpital SamaDoc</h2>
            <p>Bienvenue dans notre centre d'aide en ligne. Trouvez ci-dessous des réponses aux questions fréquemment posées concernant nos services hospitaliers. Si vous ne trouvez pas la réponse à votre question, n'hésitez pas à nous contacter pour obtenir de l'aide personnalisée.</p>
            <ol>
                <li>
                    <h3>Comment prendre un rendez-vous avec un medecin sur samaDoc ?</h3>
                    <ul>
                        <li>Vous pouvez prendre un rendez-vous en ligne en visitant notre site web et en utilisant notre service de réservation en ligne.</li>
                        <li>Vous pouvez également appeler notre service de prise de rendez-vous au <strong>+221 77 356 36 35</strong>.</li>
                    </ul>
                </li>
                <li>
                    <h3>Comment annuler ou modifier un rendez-vous ?</h3>
                    <ul>
                        <li>Vous pouvez annuler ou modifier un rendez-vous en ligne en accédant à votre compte sur notre site web.</li>
                        <li>Si vous avez besoin d'assistance, veuillez appeler notre service de prise de rendez-vous.</li>
                    </ul>
                </li>
                <li>
                    <h3>Comment puis-je obtenir des informations sur les médecins disponibles ?</h3>
                    <p>Consultez la section "Nos Médecins" sur notre site web pour en savoir plus sur nos médecins, leurs spécialités et leurs disponibilités.</p>
                </li>
            </ol>
            <h3>Contactez samaDoc pour de l'aide supplémentaire :</h3>
            <p>Téléphone : <strong>+221 77 356 36 35</strong><br>
            Email : <strong>samadoc@gmail.com</strong><br>
            Adresse : <strong>samaDoc</strong></p>
            <p>Nous sommes là pour vous aider à obtenir les meilleurs soins possibles à l'Hôpital SamaDoc. N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations.</p>
        </div>
    </div>


    <!-- <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>À Propos de SamaDoc</h2>
                <p>SamaDoc est votre plateforme de consultation en ligne, offrant des services médicaux de qualité à distance. Notre mission est de rendre les soins de santé accessibles et pratiques pour tous.</p>
                <a href="../CenlendrierDeReservation/avisevaluation.html" id="openModal" style="color: rgb(0, 220, 220); text-decoration: none;">
                    <i class="fas fa-question-circle"></i>&nbsp;Voullez-vous nous evaluez?
                </a> 
            </div>
            
            <div class="footer-section contact">
                <h2>Contactez-Nous</h2>
                <p><i class="fas fa-map-marker-alt"></i> 123 Rue des Docteurs, Ville, Pays</p>
                <p><i class="fas fa-envelope"></i> contact@samadoc.com</p>
                <p><i class="fas fa-phone"></i> +123 456 789</p>
            </div>
            
            <div class="footer-section follow">
                <h2>Suivez-Nous</h2>
                <a href="https://www.facebook.com/" class="social-icon" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            
            <div class="footer-section specialities">
                <h2>Vous recherchez</h2>
                <div class="special">
                    <ul class="special-list">
                        <li>Un chirurgien</li>
                        <li>Un dentiste</li>
                        <li>Une sage femme</li>
                    </ul>
                </div>
                <div class="special">
                    <ul class="special-list">
                        <li>Un pédiatre</li>
                        <li>Un dermatologue</li>
                        <li>Un ophtalmologue</li>
                    </ul>
                </div>
                <div class="special">
                    <ul class="special-list">
                        <li>Un gynecologue</li>
                        <li>Un opticien</li>
                        <li>Un psychologue</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p><a href="ConditionsDutilisation.pdf">Conditions d'Utilisation</a> | <a href="PolitiqueConfidentialite.pdf">Politique de Confidentialité</a></p>
            <p>&copy; 2023 SamaDoc. Tous droits réservés.</p>
        </div>
    </footer> -->
</body>
</html>