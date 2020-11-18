<?php
    $lastname = 'Audouit';
    $firstname = 'Thomas';
    $age = 22; // C'est un nombre entier donc pas de côtes !
?>
<!-- Bonne pratique ! -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier exercice PHP</title>
</head>
<body>

<!--En PHP, les simples côtes pour les chînes de caractères sont plus appréciées.-->

<!-- Ecrire du HTML dans le PHP est possible mais c'est proscrit ! -->

  <strong><p><?php echo $age; ?></p></strong>
  <p><?php echo $age; ?></p>

  <?= $firstname ?> <!--C'est un raccourci qui signifie la même chose que ci-dessous. -->
  <?php echo $firstname ?> 
    
    <p><?php echo $lastname ?></p>
    <p><?php echo $firstname ?></p>
    <p><?php echo $age ?></p>

    <p><?php echo $lastname . '' . $firstname . '' . $age ?></p>
    
<!-- Pour concaténer, on utilise le . et pour faire un espace, on fait ''. -->

</body>
</html>