<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>

    <h1>Résultat GET</h1>

    <?php

    if (isset($_GET["nom"]) && isset($_GET["prenom"])) {

        $nom = htmlspecialchars($_GET["nom"]);
        $prenom = htmlspecialchars($_GET["prenom"]);

        if ($nom != "" && $prenom != "") {
            echo "<p>Bonjour " . $prenom . " " . $nom . "</p>";
        } else {
            echo "<p>Veuillez remplir tous les champs.</p>";
        }

    } else {
        echo "<p>Veuillez remplir le formulaire.</p>";
    }

    ?>

</body>
</html>