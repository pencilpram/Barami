<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");
if (isset($_GET["userid"])) {
    $userid = $_GET["userid"];
    $delete_query = "DELETE FROM users WHERE userid = '$userid'";
    $delete_result = $mysqli->query($delete_query);
    if (!$delete_result) {
        echo "Delete failed!<br/>";
        echo $mysqli->error;
    } else {
        header("location: home-Final-Adminmode.php");
    }
}
?>