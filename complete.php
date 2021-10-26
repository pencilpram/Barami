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
    $userid = $_SESSION['userid'];
    $booksid = $_SESSION['booksinformationid'];
    date_default_timezone_set('Aisa/Bangkok');
    $date = date("d-m-Y");
    $returndate = date("d-m-Y", strtotime("$date +7 day"));
    $borrow = 'Borrowing';


    for ($i = 0; $i < $amount; $i++) {
        $query = "SELECT MAX(TRIM(LEADING 'S' FROM borrowid)) as borrow_id FROM borrowid;";
        $result = $mysqli->query($query) or die('There was an error running the query [' . $mysqli->error . ']');
        $row = $result->fetch_assoc();
        $last_borrow_id = empty($row['borrow_id']) ? 0 : $row['borrow_id'];
        $lastnumid = ltrim($last_borrow_id, "0");
        $next_borrow_id = 'S' . str_pad($lastnumid + 1, 4, "0", STR_PAD_LEFT);
    }

    $query = "INSERT INTO borrowid (borrowid,userid,booksinformationid,borrowfromdate,borrowtodate,status) VALUES ('$next_borrow_id','$userid','$booksid'
    '$date','$returndate','$borrow')";
    $result = $mysqli->query($query);

    echo 'Complete';

    header("location: Final-Login.php");


    ?>