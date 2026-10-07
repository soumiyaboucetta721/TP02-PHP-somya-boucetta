<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Boucles for</title>
</head>
<body>

    <h1>Exercice 7 — Boucles for</h1>

    <h2>Table de multiplication de 5</h2>

    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo "<p>5 × " . $i . " = " . (5 * $i) . "</p>";
    }

    ?>

    <h2>Pyramide</h2>

    <?php

    for ($i = 1; $i <= 5; $i++) {
        echo str_repeat("*", $i) . "<br>";
    }

    ?>

</body>
</html>