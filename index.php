<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Shop</title>
</head>
<body>
<?php include header.php ?>
<form action="addItem.php" method="post">
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

<?php if(isset($_GET["nothingChosen"])): ?>
	<h3>Check input, please!</h3>
<?php endif; ?>
</form>
<?php include footer.php ?>
</body>
</html>
