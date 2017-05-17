
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
	if(isset($_GET["1"])) {
		echo count($_POST);
		unset($_POST[$_GET["1"]]);
		
	}
}

deleteProd();

$prod = array("crisps" => 10, "Beer" => 15, "cookies" => 7, "cola" => 9);
$totalP = 0;
?>

<?php function testinput($inp) {
	if((int)$inp <= 0) {
		header("Location: index.php?nothingChosen=2");
		exit;
	} else 
	{
		return true;
	}

}
?>

<?php if(isset($_POST["crisps"]) || isset($_POST["Beer"]) || isset($_POST["cookies"]) || isset($_POST["cola"])) :?>

<?php foreach ($_POST as $key => $value) {
	testinput($value);
	} ?>
<table>
<tr>
<th>Item</th>
<th>Price</th>
<th>Amount</th>
<th>Sum</th>
<th></th>
</tr>

<?php foreach ($_POST as $key => $value): ?>
<?php $c = 1; ?>
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
<!-- <form method="get" action="basket.php"> -->
<!-- <input type="text" > -->
<!-- <input type="hidden" name="delete" value="<?php echo $key; ?>">
<input type="submit" name="" value="Delete product"> -->
<a href="basket.php?<?php echo $c; ?>">Delete</a>
</form>
</th>
</tr>
<?php $c++; ?>
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
	<a href="index.php">Go to the purchase of goods</a>
<?php endif; ?>


	<button id="b"><a href="index.php">Home</a></button>
	<script>
		var a = document.getElementById("b");
		a.onclick = function() { alert("Thanks for buying")};
	</script>


</body>
</html>
