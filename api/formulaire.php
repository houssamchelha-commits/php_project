<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
</head>
<body>

<form method="post">
    Numéro : <input type="text" name="num" required><br><br>
    Nom : <input type="text" name="nom" required><br><br>
    Prénom : <input type="text" name="prenom" required><br><br>
    Date de naissance : <input type="date" name="date_naissance" required><br><br>

    Loisirs :<br>
    <input type="checkbox" name="loisirs[]" value="Sport"> Sport<br>
    <input type="checkbox" name="loisirs[]" value="Lecture"> Lecture<br>
    <input type="checkbox" name="loisirs[]" value="Musique"> Musique<br><br>

    Sexe :<br>
    <input type="radio" name="sexe" value="Homme" required> Homme
    <input type="radio" name="sexe" value="Femme" required> Femme<br><br>

    <button type="submit">S'inscrire</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $sexe = $_POST["sexe"];

    if (isset($_POST["loisirs"])) {
        $loisirs = implode(", ", $_POST["loisirs"]);
    } else {
        $loisirs = "Aucun";
    }

    echo "<h3>Informations saisies</h3>";
    echo "Numéro : $num <br>";
    echo "Nom : $nom <br>";
    echo "Prénom : $prenom <br>";
    echo "Date de naissance : $date_naissance <br>";
    echo "Loisirs : $loisirs <br>";
    echo "Sexe : $sexe <br>";
}
?>

</body>
</html>