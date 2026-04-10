<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire — Houssam Chelha</title>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
:root {
  --bg-main:#37353E;
  --bg-secondary:#44444E;
  --accent:#715A5A;
  --accent-light:#9a7a7a;
  --text-light:#D3DAD9;
  --text-dim:#9ba5a4;
  --border:rgba(211,218,217,0.08);
}

body{
  margin:0;
  font-family:'Outfit',sans-serif;
  background:var(--bg-main);
  color:var(--text-light);
}

/* NAVBAR */
.navbar{
  height:70px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:0 40px;
  background:#37353E;
  border-bottom:1px solid var(--border);
}
.navbar a{
  color:var(--text-dim);
  text-decoration:none;
  margin-left:20px;
}
.navbar a:hover{color:white}

/* SECTION */
.container{
  max-width:800px;
  margin:80px auto;
  padding:20px;
}

/* CARD */
.card{
  background:var(--bg-secondary);
  padding:30px;
  border-radius:12px;
  border:1px solid var(--border);
}

/* TITLE */
h2{
  margin-bottom:20px;
}

/* INPUTS */
input[type="text"],
input[type="date"]{
  width:100%;
  padding:10px;
  margin-top:5px;
  margin-bottom:15px;
  border-radius:6px;
  border:1px solid var(--border);
  background:var(--bg-main);
  color:white;
}

input:focus{
  outline:none;
  border-color:var(--accent-light);
}

/* CHECKBOX & RADIO */
label{
  display:block;
  margin-bottom:8px;
  color:var(--text-dim);
}

/* BUTTON */
button{
  background:var(--accent);
  color:white;
  padding:10px 20px;
  border:none;
  border-radius:6px;
  cursor:pointer;
}
button:hover{
  background:var(--accent-light);
}

/* RESULT */
.result{
  margin-top:25px;
  padding:15px;
  background:#2f2d35;
  border-left:4px solid var(--accent);
}
</style>
</head>

<body>

<div class="navbar">
  <div><strong>Chelha Houssam</strong></div>
  <div>
    <a href="index.php">Accueil</a>
  </div>
</div>

<div class="container">
  <div class="card">

    <h2>Formulaire d'inscription</h2>

    <form method="post">

      <label>Numéro</label>
      <input type="text" name="num" required>

      <label>Nom</label>
      <input type="text" name="nom" required>

      <label>Prénom</label>
      <input type="text" name="prenom" required>

      <label>Date de naissance</label>
      <input type="date" name="date_naissance" required>

      <label>Loisirs</label>
      <label><input type="checkbox" name="loisirs[]" value="Sport"> Sport</label>
      <label><input type="checkbox" name="loisirs[]" value="Lecture"> Lecture</label>
      <label><input type="checkbox" name="loisirs[]" value="Musique"> Musique</label>

      <br>

      <label>Sexe</label>
      <label><input type="radio" name="sexe" value="Homme" required> Homme</label>
      <label><input type="radio" name="sexe" value="Femme" required> Femme</label>

      <br><br>

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

        echo "<div class='result'>";
        echo "<h3>Informations saisies</h3>";
        echo "Numéro : $num <br>";
        echo "Nom : $nom <br>";
        echo "Prénom : $prenom <br>";
        echo "Date de naissance : $date_naissance <br>";
        echo "Loisirs : $loisirs <br>";
        echo "Sexe : $sexe <br>";
        echo "</div>";
    }
    ?>

  </div>
</div>

</body>
</html>