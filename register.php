<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Shop</title>
</head>
<body>

<form action="checkPass.php" method="post">
Username: <input name="username" type="text" value="Test"></br>
Password: <input name="password" type="text" value="123456"></br>

<input type="submit" value="LogIn">
</form>
<?php if(isset($_GET["incorrect"])) {
	echo '<p>Check input, please (are your login and password correct?)</p>';
}
?>


</body>
</html>