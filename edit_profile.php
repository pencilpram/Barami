<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$email = $_POST['email'];
$usergroup = $_POST['usergroup'];
$title = $_POST['title'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];


//Update Database
$update_sql = "UPDATE users SET title='$username', firstname='$firstname', lastname='$lastname', 
age='$age', birthdate='$birthdate', gender='$gender', usergroup='$usergroup', 
email='$email' WHERE userid='$userid'";
$update_result = $mysqli->query($update_sql);
header("location: home-Final.php"); //ไปตามหน้าที่คุณต้องการ