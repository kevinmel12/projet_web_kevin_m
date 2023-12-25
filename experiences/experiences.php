<head>
    <link rel="stylesheet" href="experiences/experiences.css">
</head>



<div id="experiences">    
    <div class="experiences">
            <h2>Expériences :</h2>
            <?php
            $experiences = yaml_parse_file('experiences/experiences.yaml');
            echo "<p class='section'><b>Poste occupé :</b> " . $experiences['poste'] . "</p>";
            echo "<p class='section'><b>Mon entreprise :</b> " . $experiences['entreprise'] . "</p>";    
            echo "<p class='section'><b>Date de début :</b> " . $experiences['debut'] . "</p>";
            echo "<p class='section'><b>Date de fin :</b> " . $experiences['fin'] . "</p>"; 
            echo "<p class='section'><b>Lieu :</b> " . $experiences['lieu'] . "</p>"; 
            echo "<p class='section'><b>Tâche :</b> " . $experiences['tache'] . "</p>"; 
            echo "<p class='section'><b>Mon CV 👉 :</b> <a href='CV\CV Kévin Meledje 2023.pdf'>" . $experiences['cv'] . "</a></p>";
            ?>
    </div>
</div>
