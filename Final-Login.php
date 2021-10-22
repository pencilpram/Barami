<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barami Library</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="cssofboostrap.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet" />
</head>

<body style="background:rgba(254, 250, 220, 1); margin:0;">
    <div class="container" style="margin: 0px; max-width: 100%; padding: 0px;">
        <!-- Title Bar -->
        <div class="row" style="background-color: rgba(252, 161, 125, 1); max-width: 100%; margin:0px;">
            <span class="baramiword">
                Barami Library
            </span>
        </div>
        <!-- Sign in title -->
        <div class="row" style="height:150px; max-width: 100%;">
            <span class="col" style="text-align: center; font-family: Inter; font-weight: Light; font-size: 45px; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                Sign In
            </span>
        </div>
        <!-- Green box -->
        <form method="post" action="Final-Login.php">
            <div class="row" style=" max-width: 100%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                <div class="greenbox" style="width: 500px; height: 220;">
                    <div class="row" style="height:220px;">
                        <div class="mt-3 ml-3 row">
                            <label class="col-5 col-form-label " style="text-align: center; font-family: Inter;
                                                                            font-weight: Light; font-size: 22px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Username</label>
                            <div class="col-7" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="username">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-5 col-form-label" style="text-align: center; font-family: Inter;
                                                                            font-weight: Light; font-size: 22px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Password</label>
                            <div class="col-7" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sign in button -->
            <div class="row" style="height: 50px; max-width: 100%; margin-top:50px; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                <input type="submit" class="col btn btn-primary" style="width: 140px; height: 50px; border-top-left-radius: 35px;
                                                            border-top-right-radius: 35px; border-bottom-left-radius: 35px; border-bottom-right-radius: 35px; font-family: Inter;
                                                            font-weight: Light; font-size: 18px; background-color: #264653" value="Sign in" name="signin">

            </div>
        </form>

        <?php
        $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
        if (isset($_POST['signin'])) {
            //รับค่า user & password
            $username = $_POST['username'];
            $password = $_POST['password'];

            //query 
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = $mysqli->query($sql);

            // หาจำนวนเรกคอร์ดข้อมูล
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $item = $result->fetch_array();
                $_SESSION['userid'] = $item['userid'];
                header("location: home-Final.php"); //ไปตามหน้าที่คุณต้องการ

            } else {
                $code_error = "<BR><FONT COLOR=\"red\">Incorrect Username or Password</FONT>";
                echo ($code_error);
                header("location: Final-Login.html"); //ไม่ถูกต้องให้กลับไปหน้าเดิม
            }
        }
        ?>
        <!-- Register Button -->
        <div class="row" style="max-width: 100%; display: flex; justify-content: center; align-content: flex-end; flex-direction: column; margin-right: 40px;">
            <form role="form" name="formregister" method="post" action="register.html" style="width: 140px; height: 50px; margin-top: 30px; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                <input type="submit" class="col btn btn-primary" style="width: 140px; height: 50px; border-top-left-radius: 35px;
                                                            border-top-right-radius: 35px; border-bottom-left-radius: 35px; border-bottom-right-radius: 35px; font-family: Inter;
                                                            font-weight: Light; font-size: 18px;background-color: rgba(38, 70, 83, 0.5); color: rgba(0, 0, 0, 1);" value="Register" name="register border-color">
            </form>
        </div>


</body>

</html>