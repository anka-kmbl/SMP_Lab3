<?php session_start() ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Shop</title>
</head>
<body>
<?php
include 'header.php'; 



?>
<?php
if(isset($_SESSION["check"])) {
	echo '<script src="changeHScript.js"></script>';
	echo '<h2>Welcome to our shop, '.$_SESSION["username"].'</h2>';
}
else
{
  echo '<script src="changeHScriptUnLog.js"></script>
  <h2>You have not logged yet.</h2>
  <h4>You should log in in order to buy.</h4>';
}
    ?>


<?php if(isset($_GET["prod"])) {
		include 'prodList.php';
		}
		?>

<?php if(isset($_GET["logout"])) {
		session_unset();
		session_destroy(); 

		header("Location: index.php");
		exit();
		}


		?>
<?php if(isset($_GET["nothingChosen"])): include 'prodList.php'; ?>
	<h3>Check input, please!</h3>
<?php endif; ?>
<!-- <form action="addItem.php" method="post">
<table>
<tr>
<th>
Item
</th>
<th>
Amount
</th>
<th>
Price
</th>

</tr>
<?php $prod = array("crisps" => 10, "Beer" => 15, "cookies" => 7, "cola" => 9); 
?>
<?php foreach ($prod as $key => $value) :?>
<tr>
<td><?php echo($key) ?></td>
<td>
<input style="width: 40px;" type="number" name="<?php echo($key) ?>">
</td>
<td><?php echo($prod[$key]." $") ?></td>
</tr>

<?php endforeach; ?>

<tr>
<td></td>
<td></td>
<td>
<input type="submit" value="Buy" style="float: right;">
</td>
</tr>



</table>


</form> -->
<?php include 'footer.php'; ?>
</body>
</html>


