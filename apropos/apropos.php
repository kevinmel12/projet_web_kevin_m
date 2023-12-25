<head>
    <link rel="stylesheet" href="apropos/apropos.css">
</head>



<div id="apropos">    
    <div class="apropos">
            <h2>A propos :</h2>
            <?php
            $apropos = yaml_parse_file('apropos/apropos.yaml');
            echo "<p class='section'><b>A propos de moi :</b> " . $apropos['accroche'] . "</p>";
            echo "<p class='section'><b>Pourquoi l'informatique ? :</b> " . $apropos['propos'] . "</p>";    
            ?>
        
        <div class="illu-apropos">
            <img src="images/apropos.jpg" alt="photo d'illustration">
        </div>
    </div>
</div>
