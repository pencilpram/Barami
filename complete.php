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

        $query1 = "INSERT INTO borrowid (borrowid,userid,booksinformationid,borrowfromdate,borrowtodate,status) VALUES ('$next_borrow_id','$userid','$bookid','$date','$returndate','$borrow')";
        $result1 = $mysqli->query($query1);
        $query2 = "UPDATE booksinformation SET available_amount = available_amount -1 WHERE booksinformationid = '$bookid'";
        $result2 = $mysqli->query($query2);

        echo '<div style="font-size:50px; text-align:center; margin-top:170px;"><span>Borrow Complete</span></div>';
        echo '<div style="text-align:center; padding-top:20px"><span>Book borrowing on date ' . $date . '</span></div>';
        echo '<div style="text-align:center;"><span>Please return the book on date ' . $returndate . '</span></div>';

        header('home-Final.php');
        ?>
        <div class=" col-2" style="width: 15%; margin-top: 60px;">
            <form role="form" method="post" action="home-Final.php" style="height: 50px; display: flex; 
                                                                        justify-content: center; align-content: center; flex-direction: column;">
                <input type="submit" class="col btn btn-primary mb-4 position-absolute bottom-0 end-0" style="margin-right:30px; width:15%; height: 50px;
                                                                            border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                            border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                            background-color: #264653; " value="Back" name="back">
            </form>
        </div>