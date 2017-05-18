<?php
	session_start();
 if (isset($_POST["personName"]) && isset($_POST["surname"]) && isset($_POST["information"]) && isset($_POST["age"])) {
 	//$check = (int)$_POST["personName"];
    
if((int)$_POST["age"] < 16 || strlen($_POST["personName"]) < 1 || strlen($_POST["surname"]) < 1 || strlen($_POST["information"]) < 50 ) {
	 header("Location: profile.php?inpErr=1");
	 exit;
}

// else if(strlen($_POST["personName"]) < 1 || strlen($_POST["surname"]) < 1) {
// 	header("Location: profile.php?nameErr=1");
// 	exit;
// }

// else if(strlen($_POST["information"]) < 50) {
// 	header("Location: profile.php?infErr=1");
// 	exit;
// }
else {
	$_SESSION["personName"] = $_POST["personName"];
	$_SESSION["surname"] = $_POST["surname"];
	$_SESSION["information"] = $_POST["information"];
	$_SESSION["age"] = $_POST["age"];
	$_SESSION["ok"] = 1;
	header("Location: profile.php");
	exit;
}

}

	header("Location: profile.php?err=1");
	exit;

?>
