<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="cssofboostrap.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet" />
    <title>Barami Library</title>
</head>

<body style="background:rgba(254, 250, 220, 1); margin:0;">
    <div class="container" style="margin: 0px; max-width: 100%; padding: 0px;">
        <!-- Title Bar -->
        <div class="row" style="background-color: rgba(252, 161, 125, 1); max-width: 100%; margin:0px;">
            <span class="baramiword">
                Barami Library
            </span>
        </div>
        <div class="row" style="height:80px; max-width: 100%;">
            <span class="col" style="margin-left: 100px; text-align: left; font-family: Inter; font-weight: Light; font-size: 30px; display: flex; justify-content: flex-end; align-content: center; flex-direction: column;">
                Confirmation
            </span>
        </div>

    <?php
    $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
    $bookid = $_GET['booksinformationid'];



    $userid = $_SESSION['userid'];


    date_default_timezone_set('Asia/Bangkok');
    $date = date("Y-m-d");
    $returndate = date("Y-m-d", strtotime("$date +7 day"));
    $borrow = 'Borrowing';


    $query = "SELECT MAX(TRIM(LEADING 'S' FROM borrowid)) as borrow_id FROM borrowid;";
    $result = $mysqli->query($query) or die('There was an error running the query [' . $mysqli->error . ']');
    $row1 = $result->fetch_assoc();
    $last_borrow_id = empty($row1['borrow_id']) ? 0 : $row1['borrow_id'];
    $lastnumid = ltrim($last_borrow_id, "0");
    $next_borrow_id = 'S' . str_pad($lastnumid + 1, 4, "0", STR_PAD_LEFT);

    $query1 = "INSERT INTO borrowid (borrowid,userid,booksinformationid,borrowfromdate,borrowtodate,status) VALUES ('$next_borrow_id','$userid','$booksid'
    '$date','$returndate','$borrow')";
    $result1 = $mysqli->query($query1);

    echo 'Complete';
    ?>