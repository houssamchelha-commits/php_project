<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Triangle en étoiles</title>
</head>
<body>

<form method="post">
    Nombre de lignes : <input type="number" name="lignes" min="1" required>
    <button type="submit">Afficher</button>
</form>

<?php
if (isset($_POST['lignes'])) {
    $n = (int) $_POST['lignes'];

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
?>

</body>
</html>