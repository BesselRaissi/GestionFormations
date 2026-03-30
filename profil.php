<?php
$nom = "Raissi";
$prenom = "Bessel";
$email = "bessel.raissi@edu.isetcom.tn";
$age = 20;
$ville = "Tunis";
$formation = "Sécurité";



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Profil utilisateur</title>
</head>
<body>
    <h1>Profil utilisateur</h1>
    <p><strong>Nom :</strong> <?php echo $nom; ?></p>
    <p><strong>Prénom :</strong> <?php echo $prenom; ?></p>
    <p><strong>Email :</strong> <?php echo $email; ?></p>
    <p><strong>Âge :</strong> <?php echo $age; ?> ans</p>
    <p><strong>Ville :</strong> <?php echo $ville; ?></p>
    <p><strong>Formation :</strong> <?php echo $formation; ?></p>
    <?php echo "<p>Bienvenue $prenom dans la formation $formation</p>"; ?>
</body>
</html>

<p>Date : <?= date("H:i:s") ?></p>