<?php session_start() ?>
<?php include 'userInfo.php' ?>

<?php if(isset($_POST["username"]) && isset($_POST["password"])) {
			if($_POST["username"] == $user["username"] && $_POST["password"] == $user["password"]) {
			$_SESSION["username"] = $_POST["username"];
			$_SESSION["date"] = date("Y-m-d h:i");
			$_SESSION["check"] = "logged";
			header("Location: index.php");
			exit;
		}
		
		else
		{
			
			header ("Location: register.php?incorrect=1");
			exit;
			
		}
	}
?>
