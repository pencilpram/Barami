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
        <div class="row" style="background-color: #264653; max-width: 100%; margin:0px;">
            <span class="baramiword col-4" style="color:white; width: 405px;">
                Barami Library
            </span>
            <span class="baramiword col-9" style="bottom:26px; color: white; font-size: 20px; justify-content: flex-end;">
                Admin Mode
            </span>
        </div>
        <?php
        $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
        $query1 = "SELECT book.booktitle, u.firstname, u.lastname, borrow.* FROM users u, borrowid borrow, booksinformation book WHERE book.booksinformationid=borrow.booksinformationid and borrow.userid=u.userid";
        $result1 = $mysqli->query($query1);
        if ($result1) {
            $num = 0;
            echo '<div class="row justify-content-center mt-5" style="max-width:100%">
                            <table class="col-10 table table-striped table-hover" style="width:90%">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Borrow ID</th>
                                        <th scope="col">Book ID</th>
                                        <th scope="col">Book Title</th>
                                        <th scope="col">User ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Borrow Date</th>
                                        <th scope="col">Borrow to Date</th>
                                        <th scope="col">Return Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>';
            while ($booklist = $result1->fetch_array()) {
                echo    '<tr><td class="col-1">' . $booklist['borrowid'] . '</td>';
                echo        '<td class="col-1">' . $booklist['booksinformationid'] . '</td>';
                echo        '<td class="col-3">' . $booklist['booktitle'] . '</td>';
                echo        '<td class="col-1">' . $booklist['userid'] . '</td>';
                echo        '<td class="col-2">' . $booklist['firstname'] .' '.$booklist['lastname'].'</td>';
                echo        '<td class="col-1" style="width:10%;">' . $booklist['borrowfromdate'] . '</td>';
                echo        '<td class="col-1" style="width:10%;">' . $booklist['borrowtodate'] . '</td>';
                echo        '<td class="col-1" style="width:10%;">' . $booklist['actualreturndate'] . '</td>';
                if ($booklist['status'] == 'Borrowing') {
                    echo        '<td class="col-2" style="color:red;">' . $booklist['status'] . '</td>';
                } else {
                    echo        '<td class="col-2" style="color:green;">' . $booklist['status'] . '</td>';
                }
            }
            echo '</tbody>
                            </table>
                        </div>';
        } else {
            echo $mysqli->error;
            echo "<h1 style='text-alignment:center;' >No Borrowing Book</h1>";
        }

        ?>
        <div class="col-2" style="width: 15%; margin-top: 60px;">
            <form role="form" method="post" action="home-Final-Adminmode.php" style="display: flex; 
                                                                        justify-content: center; align-content: center; flex-direction: column;">
                <input type="submit" class="col btn btn-primary mb-4 position-absolute bottom-0 end-0" style="margin-right:30px; height: 50px; width:15%; 
                                                                            border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                            border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                            background-color: #264653; " value="Back" name="back">
            </form>
        </div>

    </div>
</body>

</html>