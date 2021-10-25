<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="login.css" rel="stylesheet" />
    <link href="./register.css" rel="stylesheet" />
    <link href="cssofboostrap.css" rel="stylesheet">
    <title>Barami Library</title>
</head>

<body style="background:rgba(254, 250, 220, 1); margin:0;">
    <div class="container" style="margin: 0px; max-width: 100%; padding: 0px;">
        <!-- Title Bar -->
        <div class="row" style="background-color: rgba(252, 161, 125, 1); max-width: 100%; margin:0px;">
            <span class="baramiword" style="width:539px;">
                Barami Library
            </span>
        </div>
        <!-- Register title -->
        <div class="row" style="height:100px; max-width: 100%;">
            <span class="col" style="margin-left: 100px; text-align: left; font-family: Inter; font-weight: Light; font-size: 45px; display: flex; justify-content: flex-end; align-content: center; flex-direction: column;">
                Register
            </span>
        </div>
        <!-- Green box -->
        <form role="form" method="post" action="register.php">
            <div class="row" style=" max-width: 100%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                <div class="greenbox" style="width: 900px; height: 420px;">

                    <div class="row">
                        <!-- Title -->
                        <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Title</label>
                            <div class="col-3">
                                <select class="form-select" style="width: 100px; font-family: Inter; font-weight: Light; font-size: 18px;" name="title">
                                    <option value="">Title</option>
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Ms.</option>
                                </select>
                            </div>
                        </div>
                        <!-- Name -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Name</label>
                            <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="firstname">
                            </div>
                        </div>
                        <!-- Surname -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Surname</label>
                            <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="lastname">
                            </div>
                        </div>
                        <!-- Age + Gender-->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Age</label>
                            <div class="col-2" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="age">
                            </div>
                            <label class="col-2 col-form-label " style="text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Gender</label>
                            <div class="col-2">
                                <select class="form-select" style=" width: 150px; font-family: Inter; font-weight: Light; font-size: 18px;" name="gender">
                                    <option value="">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                        </div>
                        <!-- email -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Email</label>
                            <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <!-- Usergroup + BirthDate -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">User
                                Group</label>
                            <div class="col-3">
                                <select class="form-select" style=" width: 200px; font-family: Inter; font-weight: Light; font-size: 18px;" name="usergroup">
                                    <option value="">User Group</option>
                                    <option>Student</option>
                                    <option>Professor</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <label class="col-2 col-form-label " style="text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">BirthDate</label>
                            <div class="col-3" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="date" class="form-control" name="birthdate">
                            </div>
                        </div>
                        <div class="row" style="margin-left: 10px;">
                            <!-- username -->
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Username</label>
                            <div class="col-3" style="width: 30%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="username">
                            </div>
                            <!-- Password -->
                            <label class="col-2 col-form-label " style="text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Password</label>
                            <div class="col-3" style=" width: 30%;display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Register button -->
            <div class="row" style="max-width: 100%;">
                <div class="col-9" style="width: 70%;">

                </div>
                <div class="col-2" style="width: 15%; margin-top: 20px;">
                    <input type="submit" class="col btn btn-primary" style="width:200px; height: 50px; 
                                                        border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                        border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                        background-color: #61F189" value="Register" name="register2">
                </div>
        </form>
        <div class="col-2" style="width: 15%; margin-top: 20px;">
            <form role="form" method="post" action="Back.php" style="height: 50px; display: flex; 
                                                                        justify-content: center; align-content: center; flex-direction: column;">
                <input type="button" class="col btn btn-primary" style="height: 50px; 
                                                                            border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                            border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                            background-color: #264653; " value="Back" name="back" onclick="history.back()">
            </form>
        </div>

    </div>
    <?php
    $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
    if (isset($_POST['register2'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $usergroup = $_POST['usergroup'];
        $title = $_POST['title'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];

        $query = "SELECT MAX(TRIM(LEADING 'U' FROM userid)) as user_id FROM users;";
        $result = $mysqli->query($query) or die('There was an error running the query [' . $mysqli->error . ']');
        $row = $result->fetch_assoc();
        $last_user_id = empty($row['user_id']) ? 0 : $row['user_id'];
        $lastnumid = ltrim($last_user_id, "0");
        $next_user_id = 'U' . str_pad($lastnumid + 1, 4, "0", STR_PAD_LEFT);

        $query1 = "INSERT INTO users (userid,username,password,firstname,lastname,usergroup,title,gender,email,age,birthdate) 
    VALUES ('$next_user_id','$username','$password','$firstname','$lastname','$usergroup','$title','$gender','$email','$age','$birthdate')";

        $result2 = $mysqli->query($query1);
        header("location: Final-Login.php");
    }
    ?>
</body>

</html>