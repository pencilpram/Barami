<?php session_start(); ?>
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
        <div class="row" style=" max-width: 100%;">
            <div class="col-2" style="margin-left: 150px; margin-top:30px; height:450px;">
                
            </div>
            <div class="col-6" style=" width:700px; height: 370px; margin-top:30px;">
                <div class="row">
                    <!-- Title -->
                    <div class="mt-3 mb-3 row" style="margin-left: 10px;">

                        <label class="col-3 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                display: flex; justify-content: center; align-content: center; flex-direction: column;">
                            User ID</label>
                        <div class="col-8">
                            <div>
                                <input type="text" class="form-control" name="userid" value="<?php echo $book['booktitle'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class=" mt-3 mb-3 row" style="margin-left: 10px;">
                        <label class="col-3 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                            Authors Name</label>
                        <div class="col-8">
                            <div>
                                <input type="text" class="form-control" name="authorsname" value="<?php echo $book['authorsname'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                        <label class="col-3 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                            Publisher</label>
                        <div class="col-8">
                            <div>
                                <input type="text" class="form-control" name="publisher" value="<?php echo $book['publisher'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                        <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                                                display: flex; justify-content: center; align-content: center; flex-direction: column;">
                            Page</label>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control" name="numberofpage" value="<?php echo $book['numberofpage'] ?>">
                            </div>
                        </div>
                        <label class="col-3 col-form-label" style="text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                                                                            display: flex; justify-content: center; align-content: center; flex-direction: column;">
                            Category</label>
                        <div class="col-3">
                            <div>
                                <input type="text" class="form-control" name="genre" value="<?php echo $book['genre'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                        <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                                                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                            Amount</label>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control" name="amount" value="<?php echo $book['amount'] ?>">
                            </div>
                        </div>
                        <label class="col-3 col-form-label" style=" text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                                                                                                    display: flex; justify-content: center; align-content: center; flex-direction: column;">
                            Available</label>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control" name="available_amount" value="<?php echo $book['available_amount'] ?>">
                            </div>
                        </div>

                        <?php
                        if ($book['genre'] == "Encyclopedia") {
                            echo "<a class='col-2' href='Library_Map/1A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        } elseif ($book['genre'] == "Philosophy") {
                            echo "<a class='col-2' href='Library_Map/2A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        } elseif ($book['genre'] == "Computer & Tech") {
                            echo "<a class='col-2' href='Library_Map/3A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        } elseif ($book['genre'] == "Magazine") {
                            echo "<a class='col-2' href='Library_Map/4A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        } elseif ($book['genre'] == "History & Culture") {
                            echo "<a class='col-2' href='Library_Map/5A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        } elseif ($book['genre'] == "Art & Music") {
                            echo "<a class='col-2' href='Library_Map/6A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        } elseif ($book['genre'] == "Education") {
                            echo "<a class='col-2' href='Library_Map/7A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        } elseif ($book['genre'] == "Novel") {
                            echo "<a class='col-2' href='Library_Map/9A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        } elseif ($book['genre'] == "Others") {
                            echo "<a class='col-2' href='Library_Map/10A.png' style='text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;'>Mapping</a>";
                        }
                        ?>
                    </div>

                </div>

            </div>
        </div>
        <div class="row" style="max-width: 100%;">
            <div class="col-7" style="width: 70%;">
                <?php
                echo '<a href="' . $book['link'] . '" style="position:relative; left:23.3%;">Buy this book</a>';
                ?>
            </div>
            <div class="col-2" style="width: 15%;">
                <!-- <input type="submit" class="col btn btn-primary" style="width:200px; height: 50px; 
                                                        border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                        border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                        background-color: #61F189" value="Borrow This Book" name="editprofile" formaction="complete.php"> -->

                <input type="submit" class='col btn btn-primary' style='width:200px; height: 50px;
                                                                border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                               border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px;
                                                                background-color: #61F189 ;' value='Edit Book' name='editbook'>

            </div>
            </form>
            <div class=" col-2" style="width: 15%;">
                <form role="form" method="post" action="home-Final-Adminmode.php" style="height: 50px; display: flex; 
                                                                        justify-content: center; align-content: center; flex-direction: column;">
                    <input type="submit" class="col btn btn-primary" style="height: 50px; 
                                                                            border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                            border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                            background-color: #264653; " value="Back" name="back">
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>