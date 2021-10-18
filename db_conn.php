<?php
$sname = "localhost";
$unmae = "root";
$password = NULL;
$db_name = "Barami_Library";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";
}
