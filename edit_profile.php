<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");

$username = $user['username'];
$password = $user['password'];
$firstname = $user['firstname'];
$lastname = $user['lastname'];
$age = $user['age'];
$email = $user['email'];
$usergroup = $user['usergroup'];
$title = $user['title'];
$gender = $user['gender'];
$birthdate = $user['birthdate'];


//Update Database
$update_sql = "UPDATE users SET title='$username', firstname='$firstname', lastname='$lastname', 
age='$age', birthdate='$birthdate', gender='$gender', usergroup='$usergroup', 
email='$email' WHERE userid='$userid'";
$update_result = $mysqli->query($update_sql);
header("location: home-Final.php"); //ไปตามหน้าที่คุณต้องการ
