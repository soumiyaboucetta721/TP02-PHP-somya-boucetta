<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Switch et date</title>
</head>
<body>

    <h1>Exercice 6 — Switch et date</h1>

    <?php

    $jour = date("N");

    switch ($jour) {
        case 1:
            echo "<p>Lundi</p>";
            break;

        case 2:
            echo "<p>Mardi</p>";
            break;

        case 3:
            echo "<p>Mercredi</p>";
            break;

        case 4:
            echo "<p>Jeudi</p>";
            break;

        case 5:
            echo "<p>Vendredi</p>";
            break;

        case 6:
            echo "<p>Samedi</p>";
            break;

        case 7:
            echo "<p>Dimanche</p>";
            break;
    }

    echo "<p>Date actuelle : " . date("d/m/Y") . "</p>";

    ?>

</body>
</html>