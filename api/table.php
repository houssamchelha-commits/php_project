<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Table de multiplication</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #37353E;
            color: #D3DAD9;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #44444E;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #000;
        }

        h1 {
            color: #D3DAD9;
            margin-bottom: 20px;
        }

        input, button {
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
        }

        input {
            width: 100px;
        }

        button {
            background-color: #715A5A;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #5c4747;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #D3DAD9;
            padding: 10px;
            width: 40px;
            height: 40px;
        }

        tr:nth-child(even) {
            background-color: #37353E;
        }

        tr:nth-child(odd) {
            background-color: #44444E;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #D3DAD9;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Table de multiplication</h1>

    <form method="post">
        <label>Entrer un nombre :</label><br>
        <input type="number" name="n" min="1" required>
        <br>
        <button type="submit">Afficher</button>
    </form>

    <?php
    if (isset($_POST['n'])) {
        $n = (int) $_POST['n'];

        echo "<table>";

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

    <a href="index.php">⬅ Retour à l'accueil</a>

</div>

</body>
</html>