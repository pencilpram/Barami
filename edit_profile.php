<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");


//Update Database
$update_sql = "UPDATE users SET title='$title', firstname='$firstname', lastname='$lastname', age='$age', birthdate='$birthdate', gender='$gender', usergroup='$usergroup', email='$email' WHERE userid='$userid'";
$update_result = $mysqli->query($update_sql);
header("location: home-Final.php"); //ไปตามหน้าที่คุณต้องการ
?>