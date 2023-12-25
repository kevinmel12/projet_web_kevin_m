<head>
    <link rel="stylesheet" href="competences/competences.css">
</head>


<div id="competences">
    <div class="competences">
        <h2>Mes compétences :</h2>
        <?php
            $competences = yaml_parse_file('competences/competences.yaml');
                echo "<p class='section'><b>A propos de moi :</b> " . $competences['domaine'] . "</p>";

                echo "<p class='section'><b>Certification :</b> <a href='https://coursera.org/share/fcfd1abca98c6c68ea9aef80e67b7e1f'>" . $competences['certif'] . "</a></p>";

        ?>
            <div class="niveau-etoiles">
                <?php
                $niveauHTML = 4;
                $niveauCSS = 3;
                $niveauPHP = 2;
                $niveauFIGMA = 4;

                echo "<p>Niveau HTML :</p>";
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $niveauHTML) {
                        echo "<span class='etoile-filled'>&#9733;</span>";
                    } else {
                        echo "<span class='etoile-empty'>&#9734;</span>";
                    }
                }

                echo "<p>Niveau CSS :</p>";
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $niveauCSS) {
                        echo "<span class='etoile-filled'>&#9733;</span>";
                    } else {
                        echo "<span class='etoile-empty'>&#9734;</span>";
                    }
                }

                echo "<p>Niveau PHP :</p>";
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $niveauPHP) {
                        echo "<span class='etoile-filled'>&#9733;</span>";
                    } else {
                        echo "<span class='etoile-empty'>&#9734;</span>";
                    }
                }

                echo "<p>Niveau FIGMA :</p>";
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $niveauFIGMA) {
                        echo "<span class='etoile-filled'>&#9733;</span>";
                    } else {
                        echo "<span class='etoile-empty'>&#9734;</span>";
                    }
                }
                ?>
            </div>
        
        
        <div class="illu-competences">
            <img src="images/competences.png" alt="photo d'illustration">
        </div>
    </div>
</div>