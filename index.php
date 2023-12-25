<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Ma présentation</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#apropos">À propos</a></li>
        <li><a href="#competences">Compétences</a></li>
        <li><a href="#experiences">Expériences</a></li>
        <li><a href="#formation">Formation</a></li>
        <li><a href="#formulaire">Contact</a></li>
        <!-- Mon LinkedIn -->
        <li><a href="https://linkedin.com/in/kévin-meledje-4483a021a" target="logo_linkedin"><img src="images\linkedin.png" alt="LinkedIn"></a></li>
    </ul>
</nav>
<button class="close-btn" onclick="closeNavbar()">Fermer</button>

    <header class="hero">
        <div class="superposition"></div> <!-- Rappel -->
        <div class="header-content">
            <h1>Portfolio de Kévin Meledje</h1>
            <p>Bienvenue sur mon portfolio</p>
        </div>
    </header>

    <div class="pages">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            include("$page.php");
        } else {
            include("accueil/accueil.php"); 
            include("apropos/apropos.php"); 
            include("competences/competences.php"); 
            include("experiences/experiences.php"); 
            include("formation/formation.php"); 
            include("formulaire/formulaire.php"); 
        }
        ?>
    </div>

    <form action="formulaire/formulaire.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>

    <label for="message">Message :</label><br>
    <textarea id="message" name="message" required></textarea><br>

    <label for="rgpd">Ne vous inquiétez pas, je ne conserve pas vos données conformément au RGPD*.</label><br>

    <input type="submit" value="Envoyer">

    <!-- Pour la réception des messages depuis mon email kevin.meledje@sts-sio-caen.info, ce n'est pas possible car je n'ai pas accès
    aux applications avec des mots de passe sur Google. Je ne peux donc pas inclure de mot de passe dans le fichier sendmail.ini. Sinon, tout est
    censé être correct. -->

</form>



</body>
</html>