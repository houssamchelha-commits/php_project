<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Table de multiplication</title>
</head>
<body>

<form method="post">
    Nombre : <input type="number" name="n" min="1" required>
    <button type="submit">Afficher</button>
</form>

<?php
if (isset($_POST['n'])) {
    $n = (int) $_POST['n'];

    echo "<table border='1' cellspacing='0' cellpadding='10'>";

    for ($i = 1; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $n; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>