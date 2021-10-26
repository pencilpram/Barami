<?php session_start(); ?>
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
        <div class="row" style="background-color: rgba(252, 161, 125, 1); max-width: 100%; margin:0px;">
            <span class="baramiword">
                Barami Library
            </span>
        </div>
        <?php
        $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
        if (isset($_GET['borrowid'])) {
            $borrowid = $_GET['borrowid'];
            date_default_timezone_set('Asia/Bangkok');
            $date = date("Y-m-d");
            $query2 = "UPDATE borrowid SET actualreturndate ='$date',status='Returned' WHERE borrowid='$borrowid'";
            $result2 = $mysqli->query($query2);

            if (!$result2) {
                echo "Update failed!<br/>";
                echo $mysqli->error;
            }
        }
        $userid = $_SESSION['userid'];
        $query1 = "SELECT book.booktitle, borrow.* FROM borrowid borrow, booksinformation book WHERE book.booksinformationid=borrow.booksinformationid and userid= '$userid'";
        $result1 = $mysqli->query($query1);
        if ($result1) {
            $num = 0;
            echo '<div class="row justify-content-center mt-5" style="max-width:100%">
                            <table class="col-10 table table-striped table-hover" style="width:75%">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Number</th>
                                        <th scope="col">Book Title</th>
                                        <th scope="col">Borrow Date</th>
                                        <th scope="col">Borrow to Date</th>
                                        <th scope="col">Return Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Return</th>
                                    </tr>
                                </thead>
                                <tbody>';
            while ($booklist = $result1->fetch_array()) {
                echo    '<tr>
                                        <td class="col-1">' . ($num + 1) . '</td>';
                echo        '<td class="col-2">' . $booklist['booktitle'] . '</td>';
                echo        '<td class="col-2">' . $booklist['borrowfromdate'] . '</td>';
                echo        '<td class="col-2">' . $booklist['borrowtodate'] . '</td>';
                echo        '<td class="col-2">' . $booklist['actualreturndate'] . '</td>';
                if ($booklist['status'] == 'Borrowing') {
                    echo        '<td class="col-2" style="color:red;">' . $booklist['status'] . '</td>';
                    echo '<td class="col-1 table-success" style="; text-align:center;"><a href="returnbook.php?borrowid=' . $booklist['borrowid'] . '">';
                    echo "Return</td>";
                } else {
                    echo        '<td class="col-2" style="color:green;">' . $booklist['status'] . '</td>';
                    echo        '<td class="col-2"></td>';
                }

                $num++;
            }
            echo '</tbody>
                            </table>
                        </div>';
        } else {
            echo $mysqli->error;
            echo "<h1 style='text-alignment:center;' >No Borrowing Book</h1>";
        }

        ?>


    </div>
</body>

</html>