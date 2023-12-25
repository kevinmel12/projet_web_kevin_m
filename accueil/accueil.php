
<head>
<link rel="stylesheet" href="accueil/accueil.css">
</head>

<div id="accueil">
    <div class="desc1">
        <h2>Qui suis-je ?</h2>
        <p>Bonjour 👋, je suis un étudiant en BTS SIO en alternance à l'établissement Caen Sup Saint-Ursule. <br>
        Je suis passionné d'informatique, plus particulièrement de développement et de design web.</p>
    </div>
    <div class="pfp">
        <img src="images/pfp.png" alt="photo d'illustration">
    </div>
    <div class="accueil">
        <h2>Description plus détaillée de ma personne :</h2>
        <?php
        $accueil = yaml_parse_file('accueil/accueil.yaml');
        echo "<p class='section'><b>Introduction :</b> " . $accueil['accroche'] . "</p>";
        echo "<p class='section'><b>Prénom et Nom :</b> " . $accueil['prenom_nom'] . "</p>";
        echo "<p class='section'><b>Age :</b> " . $accueil['age'] . "</p>";
        echo "<p class='section'><b>Statut :</b> " . $accueil['statut'] . "</p>";
        echo "<p class='section'><b>Ville :</b> " . $accueil['lieu'] . "</p>";
        ?>
    </div>
</div>