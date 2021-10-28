<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");
$booksid = $_GET['booksinformationid'];
$booktitle = $_POST['booktitle'];
$authorsname = $_POST['authorsname'];
$publisher = $_POST['publisher'];
$numberofpage = $_POST['numberofpage'];
$genre = $_POST['genre'];
$amount = $_POST['amount'];
$available_amount = $_POST['available_amount'];

//Update Database
$update_sql = "UPDATE booksinformation SET booktitle='$booktitle', authorsname='$authorsname', publisher='$publisher', 
numberofpage='$numberofpage', genre='$genre', amount='$amount', available_amount='$available_amount' WHERE booksinformationid='$booksid'";
$update_result = $mysqli->query($update_sql);
header("location: home-Final-Adminmode.php");
