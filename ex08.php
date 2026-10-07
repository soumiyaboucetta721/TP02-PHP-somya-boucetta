<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Boucles while</title>
</head>
<body>

    <h1>Exercice 8 — Boucles while et do-while</h1>

    <h2>Boucle while</h2>

    <?php

    $i = 1;

    while ($i <= 5) {
        echo "<p>Valeur : " . $i . "</p>";
        $i++;
    }

    ?>

    <h2>Boucle do-while</h2>

    <?php

    $i = 1;

    do {
        echo "<p>Nombre : " . $i . "</p>";
        $i++;
    } while ($i <= 5);

    ?>

</body>
</html>