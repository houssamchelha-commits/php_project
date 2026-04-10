<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Triangle en étoiles</title>

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
            margin-bottom: 20px;
        }

        input, button {
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
        }

        input {
            width: 150px;
        }

        button {
            background-color: #715A5A;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #5c4747;
        }

        .triangle {
            margin-top: 20px;
            font-size: 18px;
            line-height: 1.8;
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

    <h1>Triangle en étoiles</h1>

    <form method="post">
        <label>Nombre de lignes :</label><br>
        <input type="number" name="lignes" min="1" required>
        <br>
        <button type="submit">Afficher</button>
    </form>

    <div class="triangle">
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
    </div>

    <a href="index.php">⬅ Retour à l'accueil</a>

</div>

</body>
</html>