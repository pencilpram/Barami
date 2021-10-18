<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");

if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
}

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
$objQuery = mysqli_query($mysqli, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
if ($objResult) {
    echo "Username already exists!";
} else {

    // GET LAST UNIQUE ID
    $query = "SELECT MAX(TRIM(LEADING 'U' FROM `userid`)) as user_id FROM `users`;";
    $result = $db->query($query) or die('There was an error running the query [' . $db->error . ']');
    // ADD +1 WITH LAST UNIQUE ID
    $row = $result->fetch_assoc();
    $last_user_id = empty($row['user_id']) ? 00 : $row['user_id'];
    $next_user_id = 'U' . ($last_emp_id + 1);

    $strSQL = "INSERT INTO users (username,password,firstname,lastname,usergroup,title,Gender,email,birthdate) VALUES ('" . $_POST["txtUsername"] . "', 
		'" . $_POST["txtPassword"] . "','" . $_POST["txtFirstname"] . "','" . $_POST["txtLastname"] . "','" . $_POST["optusergroup"] . "','" . $_POST["opttitle"] . "',
        '" . $_POST["optGender"] . "','" . $_POST["txtEmail"] . "','" . $_POST["birthdate"] . "')";
    $objQuery = mysqli_query($mysqli, $strSQL);

    echo "Register Completed!<br>";

    echo "<br> Go to <a href='Final-Login.html'>Login page</a>";
}

mysqli_close($mysqli);
?>

