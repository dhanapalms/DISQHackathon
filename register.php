<?php

	$aa=$_GET['val'];
	echo "<html><head></head><body><h1>";
	echo $aa;
	echo "EVENT";
	echo "</h1/></body></html>";
if(count($_POST)>0) {
	
	
	echo $aa;
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	}
	

	/* Email Validation */
	if(!isset($message)) {
	if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
	$message = "Invalid UserEmail";
	}
	}

	/* Validation to check if gender is selected */
	

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($message)) {
	if(!isset($_POST["terms"])) {
	$message = "Accept Terms and conditions before submit";
	}
	}

	if(!isset($message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO registered_users (name,eventname,description,location,eventdate,  email) VALUES
		('" . $_POST["name"] . "','" . $_POST["eventname"] . "','" . $_POST["desc"] . "','" . $_POST["loc"] . "','" . $_POST["dat"] . "',  '" . $_POST["userEmail"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$message = "Problem in registration. Try Again!";	
		}
	}
}
?>
<html>
<head>
<title>PHP User Registration Form</title>
<style>
.message {color: #FF0000;font-weight: bold;text-align: center;width: 100%;padding: 10;}
body{width:610px;}
.demo-table {background:#FFDFDF;width: 100%;border-spacing: initial;margin: 20px 0px;word-break: break-word;table-layout: auto;line-height:1.8em;color:#333;}
.demo-table td {padding: 20px 15px 10px 15px;}
.demoInputBox {padding: 7px;border: #F0F0F0 1px solid;border-radius: 4px;}
.btnRegister {padding: 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer;}
</style>
</head>
<body>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<div class="message"><?php if(isset($message)) echo $message; ?></div>
<center>Event Registration</center>
<tr>
<td>Name</td>
<td><input type="text" class="demoInputBox" name="name" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td>Event Name</td>
<td><input type="text" class="demoInputBox" name="eventname" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" class="demoInputBox" name="desc" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td>Location</td>
<td><input type="text" class="demoInputBox" name="loc" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td>Event Date</td>
<td><input type="Date" class="demoInputBox" name="dat" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="checkbox" name="terms"> I accept Terms and Conditions</td>
</tr>
</table>
<div>
<input type="submit" name="submit" value="Register" class="btnRegister">
</div>
</form>
</body></html>