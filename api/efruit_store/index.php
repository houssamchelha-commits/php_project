<?php
session_start();

$error = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "admin"){

        $_SESSION['user'] = $username;

        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = [];
        }

        header("Location: store.php");
        exit();
    }
    else{
        $error = "Nom d'utilisateur ou mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Connexion</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#16a34a,#22c55e);
}

.login-box{
    width:400px;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

h1{
    text-align:center;
    margin-bottom:30px;
    color:#16a34a;
}

input{
    width:100%;
    padding:15px;
    margin-bottom:20px;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:16px;
}

button{
    width:100%;
    padding:15px;
    border:none;
    background:#16a34a;
    color:white;
    font-size:18px;
    border-radius:10px;
    cursor:pointer;
}

.error{
    background:#fecaca;
    color:#991b1b;
    padding:12px;
    margin-bottom:20px;
    border-radius:10px;
}
</style>
</head>
<body>

<div class="login-box">

<h1>E-Fruit Login</h1>

<?php if($error != ""){ ?>
<div class="error">
<?php echo $error; ?>
</div>
<?php } ?>

<form method="POST">

<input type="text" name="username" placeholder="Username">

<input type="password" name="password" placeholder="Password">

<button type="submit" name="login">
Connexion
</button>

</form>

</div>

</body>
</html>
