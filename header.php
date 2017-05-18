
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

<li id="products" ><a href="index.php?prod=1">Products</a></li>
<li id="cart" ><a href="basket.php">Cart</a></li>
<li><a href="register.php" id="login">Login</a></li>';
echo $test;

echo '<li id="logout" ><a href="index.php?logout=1" >Logout</a></li>


</ul>
</div>';


?>
</body>
</html>

