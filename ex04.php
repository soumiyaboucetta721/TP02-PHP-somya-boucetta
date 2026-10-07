<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Types et conversions</title>
</head>
<body>

    <h1>Exercice 4 — Types et conversions</h1>

    <?php

    $entier = 10;
    $decimal = 5.5;
    $texte = "20";

    echo "<p>Entier : " . $entier . "</p>";
    echo "<p>Décimal : " . $decimal . "</p>";
    echo "<p>Texte : " . $texte . "</p>";

    // Conversion du texte en entier
    $nombre = (int)$texte;

    echo "<p>Texte converti en entier : " . $nombre . "</p>";

    // Calcul
    $resultat = $nombre + $entier;

    echo "<p>Résultat : " . $resultat . "</p>";

    ?>

</body>
</html>