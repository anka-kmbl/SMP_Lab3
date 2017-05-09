
<!-- <?php session_start(); ?>  -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Basket</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
function deleteProd()
{
	if(isset($_GET["delete"])) {
		unset($_SESSION[$_GET["delete"]]);
	}
}

deleteProd();

$prod = array("crisps" => 10, "Beer" => 15, "cookies" => 7, "cola" => 9);
$totalP = 0;
?>

<?php if(isset($_SESSION["crisps"]) || isset($_SESSION["Beer"]) || isset($_SESSION["cookies"]) || isset($_SESSION["cola"] )):?>

<table>
<tr>
<th>Item</th>
<th>Price</th>
<th>Amount</th>
<th>Sum</th>
<th></th>
</tr>

<?php foreach ($_SESSION as $key => $value): ?>

<tr>
<th><?php echo($key) ?></th>
<th><?php echo($prod[$key]." $") ?></th>
<th><?php echo($value)?></th>
<th>
	<?php
		$count = (int)$prod[$key] * (int)$value;
		$totalP += $count;
		echo($count." $");
	?>
</th>
<th>
<form method="get">
<input type="hidden" name="delete" value="<?php echo($key)?>">
<input type="submit" name="" value="Delete product">
</form>
</th>
</tr>
<?php endforeach; ?>	

<tr>
<th>Total price</th>
<th></th>
<th></th>
<th><?php echo($totalP." $") ?></th>
<th></th>
</tr>
</table>

<?php else: ?>
	<a href="index.php">Go to the putchase of goods</a>
<?php endif; ?>





</body>
</html>
