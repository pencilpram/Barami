<?php
session_start();
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");
if (isset($_GET["userid"])) {
    $userid = $_GET["userid"];
    $select_query = "SELECT * FROM users WHERE userid = '$userid'";
    $select_result = $mysqli->query($select_query);
    if ($select_result) {
        $users = $select_result->fetch_array();
    } else {
        echo "No user!!<br/>";
        echo $mysqli->error;
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barami Library</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="cssofboostrap-Admin.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet" />
</head>

<body style="background:rgba(254, 250, 220, 1); margin:0;">
    <div class="container" style="margin: 0px; max-width: 100%; padding: 0px;">
        <!-- Title Bar -->
        <div class="row" style="background-color: #264653; max-width: 100%; margin:0px;">
            <span class="baramiword col-4" style="color:white; width: 405px;">
                Barami Library
            </span>
            <span class="baramiword col-9" style="bottom:26px; color: white; font-size: 20px; justify-content: flex-end;">
                Admin Mode
            </span>
        </div>
        <div class="row" style="height:100px; max-width: 100%;">
            <span class="col-8" style="margin-left: 100px;top: 100px; text-align: left; font-family: Inter; 
                    font-weight: Light; font-size: 45px; display: flex; justify-content: flex-end; align-content: center; 
                    flex-direction: column;">
                User Detail
            </span>
        </div>
        <!-- Green box -->
        <div class="row" style=" max-width: 100%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
            <div class="greenbox" style="width: 700px; height: 420px;">
                <form role="form" method="post" action="login.php">
                    <div class="row">
                        <!-- UID -->
                        <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                User ID</label>
                            <div class="col-4">
                                <div class="form-control" style="width:50%;">
                                    <?php echo $users['userid'] ?>
                                </div>
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Title</label>
                            <div class="col-4">
                                <div class="form-control" style="width:50%;">
                                    <?php echo $users['title'] ?>
                                </div>
                            </div>
                        </div>
                        <!-- Name -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Name</label>
                            <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <div class="form-control">
                                    <?php echo $users['firstname'] ?>
                                </div>
                            </div>
                        </div>
                        <!-- Surname -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Surname</label>
                            <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <div class="form-control">
                                    <?php echo $users['lastname'] ?>
                                </div>
                            </div>
                        </div>
                        <!-- Age + BirthDate-->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Age</label>
                            <div class="col-2" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <div class="form-control">
                                    <?php echo $users['age'] ?>
                                </div>
                            </div>
                            <label class="col-2 col-form-label " style="text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                BirthDate</label>
                            <div class="col-3" style="width: 31%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <div class="form-control">
                                    <?php echo $users['birthdate'] ?>
                                </div>
                            </div>

                        </div>
                        <!-- Gender + Usergroup-->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Gender</label>
                            <div class="col-3">
                                <div class="form-control">
                                    <?php echo $users['gender'] ?>
                                </div>
                            </div>
                            <label class="col-3 col-form-label" style="width:25%; text-align: center; font-family: Inter; font-weight: Light; 
                                        font-size: 18px; display: flex; justify-content: center; align-content: center; 
                                        flex-direction: column;">User Group</label>
                            <div class="col-3">
                                <div class="form-control">
                                    <?php echo $users['usergroup'] ?>
                                </div>
                            </div>

                        </div>
                        <!-- email -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Email</label>
                            <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <div class="form-control">
                                    <?php echo $users['email'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" style="max-width: 100%;">
            <div class="col-7" style="width: 70%;">

            </div>
            <div class="col-1" style="width: 15%;">
            </div>
            </form>
            <div class=" col-3" style="width: 15%;">
                <form role="form" method="post" action="home-Final-Adminmode.php" style="height: 50px; display: flex; 
                                                                        justify-content: center; align-content: center; flex-direction: column; position:relative; top:100%; right:40%;">
                    <input type="submit" class="col btn btn-primary" style="height: 50px; 
                                                                            border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                            border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                            background-color: #264653; " value="Back" name="back">
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>