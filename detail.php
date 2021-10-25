<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");
?>
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
        <!-- Title Bar -->
        <div class="row" style="background-color: rgba(252, 161, 125, 1); max-width: 100%; margin:0px;">
            <span class="baramiword">
                Barami Library
            </span>
        </div>
        <div class="row" style="height:80px; max-width: 100%;">
            <span class="col"
                style="margin-left: 100px; text-align: left; font-family: Inter; font-weight: Light; font-size: 30px; display: flex; justify-content: flex-end; align-content: center; flex-direction: column;">
                Book Title
            </span>
        </div>
        <form method="post" action="edit_profile.php">
            <div class="row" style=" max-width: 100%;">
                <div class="col-3" style="margin-left: 150px; margin-top:30px;">
                    <img src="loupe.png" class="img-thumbnail" style="width:200px; height:200px;">
                </div>
                <div class="col-5" style=" width:700px; height: 370px; margin-top:30px;">
                    <div class="row">
                        <!-- Title -->
                        <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                            <label class="col-3 col-form-label"
                                style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Book Title</label>
                            <div class="col-8">
                                <div class="form-control">
                                    <?php echo $row['booktitle']?>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                            <label class="col-3 col-form-label"
                                style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Authors Name</label>
                            <div class="col-8">
                                <div class="form-control">
                                    Authors Name
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                            <label class="col-3 col-form-label"
                                style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Publisher</label>
                            <div class="col-8">
                                <div class="form-control">
                                    Publisher
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label"
                                style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                                                display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Page</label>
                            <div class="col-2">
                                <div class="form-control">
                                    Page
                                </div>
                            </div>
                            <label class="col-3 col-form-label"
                                style="text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                                                                            display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Category</label>
                            <div class="col-3">
                                <div class="form-control">
                                    Category
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label"
                                style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                                                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Amount</label>
                            <div class="col-2">
                                <div class="form-control">
                                    Amount
                                </div>
                            </div>
                            <label class="col-3 col-form-label"
                                style=" text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                                                                                                    display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Available</label>
                            <div class="col-2">
                                <div class="form-control">
                                    Available
                                </div>
                            </div>
                            <a class="col-2" href="Screen Shot 2564-09-21 at 22.49.40.png"
                                style=" text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                Mapping
                            </a>

                        </div>

                    </div>

                </div>
            </div>
            <div class="row" style="max-width: 100%;">
                <div class="col-9" style="width: 70%;">

                </div>
                <div class="col-2" style="width: 15%; margin-top: 60px;">
                    <input type="submit" class="col btn btn-primary" style="width:200px; height: 50px; 
                                                        border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                        border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                        background-color: #61F189" value="Borrow This Book"
                        name="editprofile">
                </div>
        </form>
        <div class="col-2" style="width: 15%; margin-top: 60px;">
            <form role="form" method="post" action="Back.php"
                style="height: 50px; display: flex; 
                                                                        justify-content: center; align-content: center; flex-direction: column;">
                <input type="button" class="col btn btn-primary" style="height: 50px; 
                                                                            border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                            border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                            background-color: #264653; " value="Back"
                    name="back" onclick="history.back()">
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>