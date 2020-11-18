<?php
    $age = 22;

    if($age >= 18){
        echo 'Vous êtes majeur !';
    } else {
        echo 'Vous êtes mineur.';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 : Ex 1 PHP</title>
</head>
<body>

    <p><?php echo $age; ?></p>

</body>
</html>