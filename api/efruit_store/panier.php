<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

if(isset($_GET['remove'])){

    $index = $_GET['remove'];

    unset($_SESSION['panier'][$index]);

    $_SESSION['panier'] = array_values($_SESSION['panier']);
}

$total = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panier</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:#f3f4f6;
}

header{
background:#1e293b;
color:white;
padding:20px 8%;
display:flex;
justify-content:space-between;
align-items:center;
}

.logo{
font-size:30px;
font-weight:bold;
color:#4ade80;
}

.back{
background:#22c55e;
color:white;
padding:10px 15px;
border-radius:10px;
text-decoration:none;
}

.title{
text-align:center;
margin:40px 0;
font-size:40px;
}

.container{
width:90%;
margin:auto;
background:white;
border-radius:20px;
padding:30px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.item{
display:flex;
justify-content:space-between;
align-items:center;
border-bottom:1px solid #eee;
padding:20px 0;
}

.left{
display:flex;
align-items:center;
gap:20px;
}

.left img{
width:90px;
height:90px;
object-fit:cover;
border-radius:15px;
}

.price{
color:#16a34a;
font-size:20px;
font-weight:bold;
}

.remove{
background:#ef4444;
color:white;
padding:10px 15px;
border-radius:10px;
text-decoration:none;
}

.total{
text-align:right;
margin-top:30px;
font-size:30px;
font-weight:bold;
color:#16a34a;
}
</style>

</head>
<body>

<header>
<div class="logo">Mon Panier</div>
<a href="store.php" class="back">Retour Store</a>
</header>

<h1 class="title">Votre Panier</h1>

<div class="container">

<?php foreach($_SESSION['panier'] as $index=>$fruit){

$subtotal = $fruit['price'] * $fruit['quantity'];

$total += $subtotal;
?>

<div class="item">

<div class="left">

<img src="<?php echo $fruit['image']; ?>">

<div>

<h2><?php echo $fruit['name']; ?></h2>

<p>Quantité : <?php echo $fruit['quantity']; ?></p>

<div class="price">
<?php echo $subtotal; ?> DH
</div>

</div>

</div>

<a href="panier.php?remove=<?php echo $index; ?>" class="remove">
Supprimer
</a>

</div>

<?php } ?>

<div class="total">
Total : <?php echo $total; ?> DH
</div>

</div>

</body>
</html>
