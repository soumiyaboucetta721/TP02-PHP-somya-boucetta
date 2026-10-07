<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Variables</title>
</head>
<body>

    <h1>Exercice 2 — Variables et concaténation</h1>

    <?php

    // Déclaration des variables
    $nom = "Boucetta";
    $prenom = "Somya";
    $filiere = "Informatique appliquée";
    $annee = 2026;
    $age = 20;

    // Affichage avec concaténation
    echo "<p>Nom : " . $nom . "</p>";
    echo "<p>Prénom : " . $prenom . "</p>";
    echo "<p>Filière : " . $filiere . "</p>";
    echo "<p>Année : " . $annee . "</p>";
    echo "<p>Âge : " . $age . " ans</p>";

    // Utilisation de .=
    $message = "Bonjour ";
    $message .= $prenom;
    $message .= " ";
    $message .= $nom;

    echo "<p>$message</p>";

    ?>

</body>
</html>