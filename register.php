<?php
    $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}	
	
	$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO member (Username,Password,Name,Status) VALUES ('".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["ddlStatus"]."')";
		$objQuery = mysql_query($strSQL);
		
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='login.php'>Login page</a>";
		
	}

	mysql_close();
