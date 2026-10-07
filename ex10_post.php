<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>

    <h1>Résultat POST</h1>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nom = htmlspecialchars($_POST["nom"] ?? "");
        $prenom = htmlspecialchars($_POST["prenom"] ?? "");

        if ($nom != "" && $prenom != "") {
            echo "<p>Bonjour " . $prenom . " " . $nom . "</p>";
        } else {
            echo "<p>Veuillez remplir tous les champs.</p>";
        }

    }

    ?>

</body>
</html>