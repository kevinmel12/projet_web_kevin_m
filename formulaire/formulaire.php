
<head>
    <link rel="stylesheet" href="formulaire/formulaire.css">
</head>

<div id="formulaire">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $destinataire = "kevin.meledje@sts-sio-caen.info";
        $sujet = "Nouveau message de $nom";
        $corpsMessage = "Nom : $nom\nEmail : $email\nMessage : $message";

     
        if (mail($destinataire, $sujet, $corpsMessage)) { 
            echo "Email envoyé avec succès !";
        } else {
            echo "Échec de l'envoi de l'email. Veuillez réessayer ultérieurement.";
        }
    }
    ?>
</div>