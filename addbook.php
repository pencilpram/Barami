<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="login.css" rel="stylesheet" />
    <link href="./register.css" rel="stylesheet" />
    <link href="cssofboostrap-Admin.css" rel="stylesheet">
    <title>Barami Library</title>
</head>

<body style="background:rgba(254, 250, 220, 1); margin:0;">
    <div class="container" style="margin: 0px; max-width: 100%; padding: 0px;">
        <!-- Title Bar -->
        <div class="row" style="background-color: #264653; max-width: 100%; margin:0px;">
            <span class="baramiword" style="color:white; width:539px;">
                Barami Library
            </span>
        </div>
        <!-- Register title -->
        <div class="row" style="height:70px; max-width: 100%;">
            <span class="col" style="margin-left: 100px; text-align: left; font-family: Inter; font-weight: Light; font-size: 35px; display: flex; justify-content: flex-end; align-content: center; flex-direction: column;">
                Add New Book
            </span>
        </div>
        <!-- Green box -->
        <form role="form" id="addnewbook" method="post" action="addbook.php" enctype="multipart/form-data">
            <div class=" row" style="margin-top: 20px; max-width: 100%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                <div class="greenbox" style="width: 700px; height: 435px;">

                    <div class="row">
                        <!-- Book Title -->
                        <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Book
                                Title</label>
                            <div class="col-9" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="booktitle">
                            </div>
                        </div>
                        <!-- Authors Name -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Writer</label>
                            <div class="col-9" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="authorsname">
                            </div>
                        </div>
                        <!-- Publisher -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Publisher</label>
                            <div class="col-9" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="publisher">
                            </div>
                        </div>
                        <!-- Page + Amount + Category-->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label " style="width:10%; text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Page</label>
                            <div class="col-2" style="width:14%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="numpage">
                            </div>
                            <label class="col-2 col-form-label " style=" width:15%; text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Amount</label>
                            <div class="col-2" style="width:10%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="amount">
                            </div>
                            <label class="col-2 col-form-label " style="width:15%; text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Category</label>
                            <div class="col-2">
                                <select class="form-select" style=" width: 200px; font-family: Inter; font-weight: Light; font-size: 18px;" name="category">
                                    <option value="">Select Category</option>
                                    <option>Music</option>
                                    <option>Computer & Tech</option>
                                    <option>Education</option>
                                    <option>Encyclopedia</option>
                                    <option>History & Culture</option>
                                    <option>Magazine</option>
                                    <option>Novel</option>
                                    <option>Philosophy</option>
                                    <option>Others</option>
                                </select>
                            </div>


                        </div>

                        <!-- Synopsis -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Synopsis</label>
                            <div class="col-9" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <textarea form="addnewbook" rows="2" class="form-control" name="synopsis">

                                </textarea>
                            </div>
                        </div>
                        <!-- Link -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Link</label>
                            <div class="col-9" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input type="text" class="form-control" name="link">
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="mb-3 row" style="margin-left: 10px;">
                            <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; display: flex; justify-content: center; align-content: center; flex-direction: column;">Image</label>
                            <div class="col-9" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                <input class="form-control" type="file" name="bookimage">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add button -->
            <div class="row" style="max-width: 100%;">
                <div class="col-9" style="width: 70%;">

                </div>
                <div class="col-2" style="width: 15%; margin-top: 20px;">
                    <input type="submit" id="addbttn" class="col btn btn-primary" style="width:200px; height: 50px; 
                                                        border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                        border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                        background-color: #61F189" value="Add" name="add">
                </div>
        </form>
        <div class="col-2" style="width: 15%; margin-top: 20px;">
            <form role="form" method="post" action="home-Final-Adminmode.php" style="height: 50px; display: flex; 
                                                                        justify-content: center; align-content: center; flex-direction: column;">
                <input type="submit" class="col btn btn-primary" style="height: 50px; 
                                                                            border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                            border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                            background-color: #264653; " value="Back" name="back">
            </form>
        </div>

    </div>

    <?php
    $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
    if (isset($_POST['add'])) {
        $booktitle = $_POST['booktitle'];
        $authorsname = $_POST['authorsname'];
        $publisher = $_POST['publisher'];
        $numpage = $_POST['numpage'];
        $amount = $_POST['amount'];
        $synopsis = $_POST['synopsis'];
        $synopsis_escape = mysqli_real_escape_string($mysqli,$synopsis);
        $category = $_POST['category'];
        $link = $_POST['link'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["bookimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["bookimage"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["bookimage"]["tmp_name"], $target_file)) {
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $query_am = "SELECT * FROM booksinformation WHERE booktitle='$booktitle' and authorsname='$authorsname' and publisher='$publisher' and numberofpage='$numpage'";
        $result_am = mysqli_query($mysqli, $query_am);
        if (mysqli_num_rows($result_am) > 0) {
            $total_am = mysqli_num_rows($result_am) + $amount;
        } else {
            $total_am = $amount;
        }

        for ($i = 0; $i < $amount; $i++) {
            $query = "SELECT MAX(TRIM(LEADING 'B' FROM booksinformationid)) as book_id FROM booksinformation;";
            $result = $mysqli->query($query) or die('There was an error running the query [' . $mysqli->error . ']');
            $row = $result->fetch_assoc();
            $last_book_id = empty($row['book_id']) ? 0 : $row['book_id'];
            $lastnumid = ltrim($last_book_id, "0");
            $next_book_id = 'B' . str_pad($lastnumid + 1, 4, "0", STR_PAD_LEFT);

            
        }
        $query1 = "INSERT INTO booksinformation (booksinformationid,booktitle,synopsis,authorsname,publisher,numberofpage,genre,amount,available_amount,link,linkimage) 
    VALUES ('$next_book_id','$booktitle','$synopsis_escape','$authorsname','$publisher','$numpage','$category','$total_am','$total_am','$link','$target_file')";
        $result2 = $mysqli->query($query1); 
        if($result2){
        }
        else{
            echo $mysqli->error;
        }
            
        $up_am = "UPDATE booksinformation SET amount=$total_am WHERE booktitle='$booktitle' and authorsname='$authorsname' and publisher='$publisher' and numberofpage='$numpage'";
        $query_up = $mysqli->query($up_am);
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>