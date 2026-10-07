<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Tableaux associatifs</title>
</head>
<body>

    <h1>Exercice 9 — Tableaux associatifs</h1>

    <?php

    $etudiant = [
        "nom" => "Boucetta",
        "prenom" => "Somya",
        "filiere" => "Informatique appliquée",
        "age" => 20
    ];

    echo "<p>Nom : " . $etudiant["nom"] . "</p>";
    echo "<p>Prénom : " . $etudiant["prenom"] . "</p>";
    echo "<p>Filière : " . $etudiant["filiere"] . "</p>";
    echo "<p>Âge : " . $etudiant["age"] . " ans</p>";

    ?>

</body>
</html>