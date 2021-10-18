<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");

if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
}

if (isset($_POST['username'])) {
    //รับค่า user & password
    $username = $_POST['username'];
    $password = ($_POST['password']);

    //query 
    $sql = "SELECT * FROM users Where username='" . [$username] . "' and password='" . [$password] . "' ";

    $result = mysqli_query($mysqli, $sql);

    // หาจำนวนเรกคอร์ดข้อมูล
    if (mysqli_num_rows($result) == 1){
        header("location: home-Final.html"); //ไปไปตามหน้าที่คุณต้องการ
    } 
    else {
        $code_error = "<BR><FONT COLOR=\"red\">Incorrect Username or Password</FONT>";
        echo($code_error);
        header("location: Final-Login.html"); //ไม่ถูกต้องให้กับไปหน้าเดิม
    }
}
// else {
//     header("Location: Final-Login.html");
// }
