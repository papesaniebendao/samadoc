<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexionMedecin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <title>connexionInscriptionMedecin</title>
    <script src="connexionMedecin.js"></script>
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
                    <li><a style="color: white; text-decoration: none" href="../inscriptionConnexion/connexionInscription.html">Se Connecter</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <form class="login-form" action="../model/authentificationmsMedecins.php" method="POST">
                <h2>Se Connecter</h2>
                <input type="email" name="email" class="center-input" placeholder="Adresse e-mail" required>
                <input type="password" name="password" class="center-input" placeholder="Mot de passe" required>
                <label>
                    <input type="checkbox" name="remember"> Se souvenir de moi
                </label>
                <button type="submit" >Se Connecter</button>
                <a href="forgot-password.html">Mot de passe oublié ?</a>
            </form>
            <p class="pasCompte">Vous n'avez pas encore de compte ? <a class="register-link" href="#inscription">S'inscrire</a></p>
            <form id="inscription" class="register-form hidden" action="../model/traitementmsMedecins.php" method="POST">
                <h2>S'inscrire</h2>
                <input type="text" name="nom" class="center-input" placeholder="Nom" required>
                <input type="text" name="prenom" class="center-input" placeholder="Prenom" required>
                <input type="email" name="email" class="center-input" placeholder="Votre adresse email" required>
                <input type="email" name="confirm_email" class="center-input" placeholder="Confirmez votre adresse email" required>
                <input type="text" name="specialite" class="center-input" placeholder="Specialite" required>
                <input type="text" name="telephone" class="center-input" placeholder="telephone" required>
                <input type="text" name="adresse" class="center-input" placeholder="adresse" required>
                <input type="password" name="password" class="center-input" placeholder="Mot de passe" required>
                <label>
                    <input type="checkbox" id="acceptTerms" name="acceptTerms"> J'accepte les conditions d'Utilisation<br/>
                    <input type="checkbox" name="remember">se souvenir de moi
                </label>
                <button type="submit" id="login-button">S'inscrire</button>
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
    
    <div class="modal-overlay" id="welcomeModal" style="display: none;">
        <div class="modal-content">
            <h2>Bienvenue sur SamaDoc, Docteur !</h2>
            <p>Nous sommes ravis de vous accueillir sur notre plateforme de réservation en ligne dédiée aux professionnels de la santé.</p>
            <p>Grâce à SamaDoc, vous pouvez simplifier la gestion de vos rendez-vous et offrir à vos patients une expérience de réservation pratique et efficace.</p>
            <p>Que vous soyez déjà inscrit ou que vous souhaitiez rejoindre notre communauté médicale, nous sommes là pour vous accompagner.</p>
            <p>Connectez-vous à votre compte ou inscrivez-vous dès maintenant pour commencer à utiliser nos services et à améliorer la manière dont vous gérez vos consultations.</p>
            <button onclick="closeWelcomeModal()">Fermer</button>
        </div>
    </div>
</body>
</html>