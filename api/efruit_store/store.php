<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

$fruits = [
    [
        "name"=>"Pomme",
        "price"=>10,
        "image"=>"https://images.unsplash.com/photo-1567306226416-28f0efdc88ce?q=80&w=1000&auto=format&fit=crop"
    ],
    [
        "name"=>"Banane",
        "price"=>8,
        "image"=>"https://images.unsplash.com/photo-1574226516831-e1dff420e37f?q=80&w=1000&auto=format&fit=crop"
    ],
    [
        "name"=>"Poire",
        "price"=>12,
        "image"=>"https://images.unsplash.com/photo-1514996937319-344454492b37?q=80&w=1000&auto=format&fit=crop"
    ]
];

if(isset($_POST['add'])){

    $_SESSION['panier'][] = [
        "name"=>$_POST['name'],
        "price"=>$_POST['price'],
        "image"=>$_POST['image'],
        "quantity"=>$_POST['quantity']
    ];
}

$count = count($_SESSION['panier']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Store</title>

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
flex-wrap:wrap;
}

.logo{
font-size:30px;
font-weight:bold;
color:#4ade80;
}

nav{
display:flex;
gap:20px;
}

nav a{
color:white;
text-decoration:none;
}

.right{
display:flex;
gap:15px;
align-items:center;
}

.cart{
background:#4ade80;
color:black;
padding:10px 15px;
border-radius:20px;
font-weight:bold;
}

.logout{
background:#ef4444;
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

.products{
width:90%;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
margin-bottom:60px;
}

.card{
background:white;
border-radius:20px;
overflow:hidden;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.card img{
width:100%;
height:220px;
object-fit:cover;
}

.content{
padding:20px;
}

.price{
color:#16a34a;
font-size:22px;
font-weight:bold;
margin-bottom:15px;
}

input{
width:100%;
padding:12px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:10px;
}

button{
width:100%;
padding:14px;
border:none;
background:#22c55e;
color:white;
border-radius:10px;
font-size:17px;
cursor:pointer;
}
</style>

</head>
<body>

<header>

<div class="logo">E-Fruit</div>

<nav>
<a href="store.php">Store</a>
<a href="panier.php">Panier</a>
</nav>

<div class="right">
<div class="cart">🛒 <?php echo $count; ?></div>
<a href="logout.php" class="logout">Logout</a>
</div>

</header>

<h1 class="title">Nos Fruits</h1>

<section class="products">

<?php foreach($fruits as $fruit){ ?>

<div class="card">

<img src="<?php echo $fruit['image']; ?>">

<div class="content">

<h2><?php echo $fruit['name']; ?></h2>

<div class="price">
<?php echo $fruit['price']; ?> DH
</div>

<form method="POST">

<input type="number" name="quantity" value="1" min="1">

<input type="hidden" name="name" value="<?php echo $fruit['name']; ?>">

<input type="hidden" name="price" value="<?php echo $fruit['price']; ?>">

<input type="hidden" name="image" value="<?php echo $fruit['image']; ?>">

<button type="submit" name="add">
Ajouter au panier
</button>

</form>

</div>

</div>

<?php } ?>

</section>

</body>
</html>
