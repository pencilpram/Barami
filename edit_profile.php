<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");


//Update Database
$update_sql = "UPDATE users SET title='$_POST[title]', firstname='$_POST[firstname]', lastname='$_POST[lastname]', 
age='$_POST[age]', birthdate='$_POST[birthdate]', gender='$_POST[gender]', usergroup='$_POST[usergroup]', 
email='$_POST[email]' WHERE userid='$userid'";
$update_result = $mysqli->query($update_sql);
header("location: home-Final.php"); //ไปตามหน้าที่คุณต้องการ
