<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");

if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
}
if (isset($_POST['username'])) {
    //รับค่า user & password
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    //query 
    $sql = "SELECT * FROM users Where username='" . $username . "' and password='" . $password . "' ";

    $result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["UserID"] = $row["ID"];
                      $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];
 
                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: admin_page.php");
 
                      }
 
                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: user_page.php");
 
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
                }
        else{
 
 
             Header("Location: form.php"); //user & password incorrect back to login again
 
        }
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barami Library</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="login.css" rel="stylesheet" />
</head>

<body style="background:rgba(254, 250, 220, 1); margin:0;">
    <div class="titlebar">
        <span class="baramiword">
            Barami Library
        </span>

    </div>

    <p class="titlesignin">
        Sign In
    </p>
    <div class="greenbox">
        <form role="form">

            <span class="username">
                Username
            </span>
            <span class="password">
                Password
            </span>

            <div>
                <input type="email" name="username" class="usernamebox" />
                <input type="password" name="password" class="passwordbox" />
            </div>
        </form>
    </div>
    <div class="signinbutton">
        <input type="submit" name="Sign in" value="Sign in" />
    </div>
    <div class="registerbutton">
        <input type="button" name="Register" value="Register" />
    </div>

</body>

</html>