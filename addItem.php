<?php
if(isset($_POST["crisps"]) || isset($_POST["Beer"]) || isset($_POST["cookies"]) || isset($_POST["cola"] )) {
	session_start();
	
	$check = false;
	foreach($_POST as $key => $value) {
		if((int)$value > 0) {
			$_SESSION[$key] = (int)$value;
			$check = true;
		} else if ((int)$value <= 0) {
			header("Location: index.php?nothingChosen=1");
			exit;
		}
	}
	if(!$check) {
		header("Location: index.php?nothingChosen=1");
			exit;
	}
		
}
header("Location: basket.php");
exit;
?>
