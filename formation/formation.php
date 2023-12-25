<head>
    <link rel="stylesheet" href="formation/formation.css">
</head>



<div id="formation">    
    <div class="formation">
            <h2>Formation :</h2>
            <?php
            $formation = yaml_parse_file('formation/formation.yaml');
            echo "<p class='section'><b>Nom de ma formation :</b> " . $formation['formation'] . "</p>";
            echo "<p class='section'><b>Mon établissement :</b> " . $formation['etablissement'] . "</p>";    
            echo "<p class='section'><b>Date de début :</b> " . $formation['debut'] . "</p>";
            echo "<p class='section'><b>Date de fin :</b> " . $formation['fin'] . "</p>"; 
            echo "<p class='section'><b>Contenu de la formation :</b> " . $formation['contenu'] . "</p>"; 
            echo "<p class='section'><b>Mon CV 👉 :</b> <a href='CV\CV Kévin Meledje 2023.pdf'>" . $formation['cv'] . "</a></p>";
            ?>
    </div>
</div>
