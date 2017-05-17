
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<?php
$test = '<li id="profile"  ><a href="profile.php" >Profile</a></li>';

echo '<div id="header">
<ul id="navbar">
<li><a href="#">Home</a></li>
<<<<<<< HEAD
<li id="products" ><a href="index.php?prod=1">Products</a></li>
<li id="cart" ><a href="basket.php">Cart</a></li>
<li><a href="register.php" id="login">Login</a></li>';
echo $test;

echo '<li id="logout" ><a href="index.php?logout=1" >Logout</a></li>
=======
<li><a href="products.php">Products</a></li>
<li><a href="basket.php">Cart</a></li>
<li><a href="register.php" id="login">Login</a></li>
<li><a href="profile.php" id="profile">Profile</a></li>
<li style="display:none;"><a href="logout.php" id="logout">Logout</a></li>
>>>>>>> b5c48eb5870888d3b6fd8a9d51163d6e1f5e0980
</ul>
</div>';


?>
</body>
</html>

