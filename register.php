<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");

if (trim($_POST["txtUsername"]) == "") {
    echo "Please input Username!";
    exit();
}

if (trim($_POST["txtPassword"]) == "") {
    echo "Please input Password!";
    exit();
}

// if($_POST["txtPassword"] != $_POST["txtConPassword"])
// {
// 	echo "Password not Match!";
// 	exit();
// }

if (trim($_POST["txtFirstname"]) == "") {
    echo "Please input Firstname!";
    exit();
}

if (trim($_POST["txtLastname"]) == "") {
    echo "Please input Lastname!";
    exit();
}

if (trim($_POST["txtAge"]) == "") {
    echo "Please input Age!";
    exit();
}

if (trim($_POST["txtEmail"]) == "") {
    echo "Please input Email!";
    exit();
}	

$strSQL = "SELECT * FROM users WHERE username = '" . trim($_POST['txtUsername']) . "' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if ($objResult) {
    echo "Username already exists!";
} else {

    $strSQL = "INSERT INTO users (username,password,firstname,lastname,usergroup,title,Gender,email,birthdate) VALUES ('" . $_POST["txtUsername"] . "', 
		'" . $_POST["txtPassword"] . "','" . $_POST["txtFirstname"] . "','" . $_POST["txtLastname"] . "','" .$_POST["optusergroup"] . "','" . $_POST["opttitle"] . "',
        '" . $_POST["optGender"] . "','" . $_POST["txtEmail"] . "','" .$_POST["birthdate"] ."')";
    $objQuery = mysql_query($strSQL);

    echo "Register Completed!<br>";

    echo "<br> Go to <a href='login.php'>Login page</a>";
}

mysql_close();
?>