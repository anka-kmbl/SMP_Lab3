<!-- <?php session_start(); ?>  -->
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="upload.php">
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">
</form>

<?php if(isset($_GET["isok"])) {
	echo "<p>The file  has been uploaded.</p>";
}
else  if(isset($_GET["isnotok"])){
	echo "<p> Your file was not uploaded</p>";
}
?>

<?php if(isset($_GET["inpErr"])) {
	echo "<p>Check your input, please</p>";
}

else if(isset($_GET["err"])) {
	echo"<p>Fields are empty.</p>";
}

else if(isset($_SESSION["ok"])) {
	
	$infArr = array();

	$infArr["personName"] = $_SESSION["personName"];
	$infArr["surname"] = $_SESSION["surname"];
	$infArr["age"] = $_SESSION["age"];
	$infArr["information"] = $_SESSION["information"];

	
	echo"<p>Your profile changes saved</p>";

}

?>
<?php echo count($infArr);?>


<?php if(isset($infArr["personName"]) && isset($infArr["surname"]) && isset($infArr["age"]) && isset($infArr["information"])) {
	$name = $infArr["personName"];
	$surname = $infArr["surname"];
	$age = $infArr["age"];
	$info = $infArr["information"];
} else {
	$name = "";
	$surname = "";
	$age = "";
	$info = "";
}
?>
<form method="post" action="uploadInfo.php">
Your Name: <input type="text" name="personName" value="<?php echo $name; ?>"></br>
Your Surname: <input type="text" name="surname" value="<?php echo $surname; ?>"></br>
Your age (not less than 16): <input type="number" name="age" value="<?php echo $age; ?>"></br>

Brief Info: <input type="text" name="information" value="<?php echo $info; ?>"></br>

<input type="submit" name="submit" value="Save"> 
</form>




</body>
</html>