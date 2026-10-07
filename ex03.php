<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Constantes et calculs</title>
</head>
<body>

    <h1>Exercice 3 — Constantes et calculs</h1>

    <?php

    // Déclaration des constantes
    define("TVA", 0.20);
    define("PRIX_HT", 100);

    // Calcul du montant de la TVA
    $montantTVA = PRIX_HT * TVA;

    // Calcul du prix TTC
    $prixTTC = PRIX_HT + $montantTVA;

    echo "<p>Prix HT : " . PRIX_HT . " DH</p>";
    echo "<p>TVA : " . ($montantTVA) . " DH</p>";
    echo "<p>Prix TTC : " . $prixTTC . " DH</p>";

    ?>

</body>
</html>