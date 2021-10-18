<!-- // Connect to the database
session_start();
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");
mysqli_select_db($mysqli,"Barami_Library");

if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
}

if (isset($_POST['username'])&&isset($_POST['password'])) {
    //รับค่า user & password
    $username = $_POST['username'];
    $password = ($_POST['password']);

    //query 
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($mysqli, $sql);

    // หาจำนวนเรกคอร์ดข้อมูล
    if (mysqli_num_rows($result) == 1) {
        header("location: home-Final.html"); //ไปไปตามหน้าที่คุณต้องการ
    } else {
        $code_error = "<BR><FONT COLOR=\"red\">Incorrect Username or Password</FONT>";
        echo ($code_error);
        header("location: Final-Login.html"); //ไม่ถูกต้องให้กับไปหน้าเดิม
    }
} -->


<!-- // $strSQL = "SELECT * FROM users WHERE username = '" . mysqli_real_escape_string($mysqli,$_POST['username']) . "' 
// 	and password = '" . mysqli_real_escape_string($mysqli,$_POST['password']) . "'";
// $objQuery = mysqli_query($mysqli,$strSQL);
// $objResult = mysqli_fetch_array($objQuery);
// if (!$objResult) {
//     echo "Username and Password Incorrect!";
// } else {
//     // $_SESSION["UserID"] = $objResult["UserID"];
//     // $_SESSION["Status"] = $objResult["Status"];

//     session_write_close();

//     if ($objResult) {
//         header("location:home-Final.html");
//     } else {
//         header("location:Final-Login.html");
//     }
// }
// mysqli_close($mysqli); -->

<?php

session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) 
    {
        header("Location: Final-Login.html?error=User Name is required");
        exit();

    } else if (empty($password)) 
    {
        header("Location: Final-Login.html?error=Password is required");
        exit();
    } else {

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];

                header("Location: home-Final.html");
                exit();
            } else {

                header("Location: Final-Login.html?error=Incorect User name or password");
                exit();
            }
        } else {

            header("Location: Final-Login.html?error=Incorect User name or password");

            exit();
        }
    }
} else {

    header("Location: Final-Login.html");

    exit();
}
