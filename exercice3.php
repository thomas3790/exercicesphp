<?php
    $km = 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 PHP</title>
</head>
<body>

<!-- Pour cet exercice, il est plus propre et plus pratique de n'avoir rien au dessus du DOCTYPE. -->

<!-- J'ai déclaré en haut ma variable que j'ai initialisé à 1. -->
    <p><?php echo $km; ?></p> 
<!-- Je redéclare ma variable ici. -->
    <?php $km = 3; ?>
    <p><?php echo $km; ?></p>
<!-- Ligne 15, 18 et 21 j'affiche le résultat de ma variable. -->
    <?php $km = 125; ?>
    <p><?php echo $km; ?></p>


</body>
</html>

