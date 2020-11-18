<?php
    $age = 22;
    $gender = array('Homme', 'Femme');

    switch($age AND $gender){
        case $age >= 18 AND $gender[0]:
            echo 'Vous êtes un homme majeur !';
        break;
        case $age < 18 AND $gender[0]:
            echo 'Vous êtes un homme mineur !';
        break;
        case $age >= 18 AND $gender[1]:
            echo 'Vous êtes une femme majeure !';
        break;
        case $age < 18 AND $gender[1]:
            echo 'Vous êtes une femme mineure !';
        break;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 : Ex 2 PHP</title>
</head>
<body>


</body>
</html>