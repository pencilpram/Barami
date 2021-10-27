<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");
if (isset($_GET["booksinformationid"])) {
    $booksid = $_GET["booksinformationid"];
    $delete_query = "DELETE FROM booksinformation WHERE booksinformationid = '$booksid'";
    $delete_result = $mysqli->query($delete_query);
    if (!$delete_result) {
        echo "Delete failed!<br/>";
        echo $mysqli->error;
    } else {
        header("location: home-Final-Adminmode.php");
    }
}
