<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barami Library</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="cssofboostrap.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet" />
    <link href="home.css" rel="stylesheet" />
</head>

<body style="background:rgba(254, 250, 220, 1); margin:0;">
    <div class="container" style="margin: 0px; max-width: 100%; padding: 0px;">
        <!-- Title Bar -->
        <div class="row" style="background-color: rgba(252, 161, 125, 1); max-width: 100%; margin:0px;">
            <span class="baramiword">
                Barami Library
            </span>
        </div>
        <!-- Menu Bar -->
        <nav style="background-color: rgba(252, 161, 125, 0.7); ">
            <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist" style="border-color: rgba(0, 0, 0, 0.5); 
            font-family: Inter; font-weight: Light; font-size: 18px;">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" style="border-color: rgba(0, 0, 0, 0.5); border-top-left-radius: 0; border-top-right-radius: 0">
                    Library</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="border-color: rgba(0, 0, 0, 0.5); border-top-left-radius: 0; border-top-right-radius: 0">
                    Library Map</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="border-color: rgba(0, 0, 0, 0.5); border-top-left-radius: 0; border-top-right-radius: 0">
                    Profile</button>
            </div>
        </nav>
        <!-- Content -->
        <div class="tab-content" id="nav-tabContent">
            <!-- Library Tab -->
            <form class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" action="home-Final.php" method="post">
                <div class="row" style="margin-top: 10px; margin-left: 10px; margin-right:0;">
                    <div class="col-2" style="width:200px;">
                        <select class="form-select" style="font-family: Inter; font-weight: Light; font-size: 16px;" name="querytype">
                            <?php
                            if (isset($_POST['search'])) {
                                if ($_POST["querytype"] == "Select Search") {
                                    echo '<option selected>Select Search</option>';
                                    echo '<option value="booktitle">Book Title</option>';
                                    echo '<option value="authorsname">Authors Name</option>';
                                    echo '<option value="publisher">Publisher</option>';
                                }
                                if ($_POST["querytype"] == "booktitle") {
                                    echo '<option>Select Search</option>';
                                    echo '<option value="booktitle" selected>Book Title</option>';
                                    echo '<option value="authorsname">Authors Name</option>';
                                    echo '<option value="publisher">Publisher</option>';
                                }
                                if ($_POST["querytype"] == "authorsname") {
                                    echo '<option>Select Search</option>';
                                    echo '<option value="booktitle">Book Title</option>';
                                    echo '<option value="authorsname" selected>Authors Name</option>';
                                    echo '<option value="publisher">Publisher</option>';
                                }
                                if ($_POST["querytype"] == "publisher") {
                                    echo '<option>Select Search</option>';
                                    echo '<option value="booktitle">Book Title</option>';
                                    echo '<option value="authorsname">Authors Name</option>';
                                    echo '<option value="publisher" selected>Publisher</option>';
                                }
                            } else {
                                echo '<option>Select Search</option>';
                                echo '<option value="booktitle">Book Title</option>';
                                echo '<option value="authorsname">Authors Name</option>';
                                echo '<option value="publisher">Publisher</option>';
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-6" style="padding: 0; width: 900px;">
                        <input type="text" class="form-control" placeholder="Search" aria-label="First name" style="font-family: Inter; font-weight: Light; font-size: 16px;" name="query" <?php if (isset($_POST['query'])) {
                                                                                                                                                                                                echo 'value=' . $_POST['query'];
                                                                                                                                                                                            } ?>>
                    </div>
                    <div class="col-2" style="width:200px;">
                        <select class="form-select" style="font-family: Inter; font-weight: Light; font-size: 16px;" name="category" value="Comic Book">
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Select Category") {
                                            echo "selected";
                                        }
                                    } ?>>Select Category</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Art & Music") {
                                            echo "selected";
                                        }
                                    } ?>>Art & Music</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Computer & Tech") {
                                            echo "selected";
                                        }
                                    } ?>>Computer & Tech</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Education") {
                                            echo "selected";
                                        }
                                    } ?>>Education</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Encyclopedia") {
                                            echo "selected";
                                        }
                                    } ?>>Encyclopedia</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "History & Culture") {
                                            echo "selected";
                                        }
                                    } ?>>History & Culture</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Magazine") {
                                            echo "selected";
                                        }
                                    } ?>>Magazine</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Novel") {
                                            echo "selected";
                                        }
                                    } ?>>Novel</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Philosophy") {
                                            echo "selected";
                                        }
                                    } ?>>Philosophy</option>
                            <option <?php if (isset($_POST['search'])) {
                                        if ($_POST["category"] == "Others") {
                                            echo "selected";
                                        }
                                    } ?>>Others</option>
                        </select>
                    </div>
                    <input type="submit" class="col btn btn-primary" style="margin-right: 20px; border-top-left-radius: 35px; 
                    border-top-right-radius: 35px; border-bottom-left-radius: 35px; border-bottom-right-radius: 35px; 
                    font-family: Inter; font-weight: Light; font-size: 16px; background-color: #264653" value="Search" name="search">


                </div>
                <div class="row" style="width: 100%; margin-top: 30px; padding:8px;">
                    <div class="col-4" style="width:480px; text-align:center;">
                        <span>Book Name</span>
                    </div>
                    <div class="col-4" style="width:480px; text-align:center">
                        <span>Author Name</span>
                    </div>
                    <div class="col-2" style="width:240px; text-align:center">
                        <span>Publisher</span>
                    </div>
                    <div class="col-1" style="width: 120px;"></div>
                    <div class="col-1" style="width: 120px;"></div>

                </div>
                <?php
                $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
                if (isset($_POST['search'])) {
                    $searchby = $_POST["querytype"];
                    $category = $_POST["category"];
                    if (isset($_POST['query'])) {
                        $search = $_POST['query'];
                        //echo $search;
                        //echo $searchby;
                        //echo $category;
                        if ($searchby == "Select Search" && $category == "Select Category") {
                            //echo "1";
                            $query = "SELECT * FROM booksinfomation WHERE (booktitle LIKE '%$search%')
                        OR (authorsname LIKE '%$search%') OR (publisher LIKE '%$search%')";
                            $result = $mysqli->query($query);
                            if ($result) {
                                echo "<table class='table'>";
                                while ($row = $result->fetch_array()) {
                                    echo "<tr>";
                                    echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                                    echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                                    echo "<td class='col-2' style='text-align:center;'>" . $row["publisher"] . "</td>";
                                    if ($row["available_amount"] == 0) {
                                        echo "<td class='col-1' style='background-color:red; text-align:center;'>B</td>";
                                    } else {
                                        echo "<td class='col-1' style='background-color:lightgreen; text-align:center;'>B</td>";
                                    }
                                    echo "<td class='col-1' style='text-align:center; margin-right:10px;'><img src='loupe.png' width='24' height='24'></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "No result";
                            }
                        } elseif ($searchby == "Select Search" && $category != "Select Category") {
                            //echo "2";
                            $query = "SELECT * FROM booksinfomation WHERE ((genre LIKE '%$category%') AND (booktitle LIKE '%$search%'))
                        OR ((genre LIKE '%$category%') AND (authorsname LIKE '%$search%')) OR ((genre LIKE '%$category%') AND (publisher LIKE '%$search%'))";
                            $result = $mysqli->query($query);
                            if ($result) {
                                echo "<table class='table'>";
                                while ($row = $result->fetch_array()) {
                                    echo "<tr>";
                                    echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                                    echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                                    echo "<td class='col-2' style='text-align:center;'>" . $row["publisher"] . "</td>";
                                    if ($row["available_amount"] == 0) {
                                        echo "<td class='col-1' style='background-color:red; text-align:center;'>B</td>";
                                    } else {
                                        echo "<td class='col-1' style='background-color:lightgreen; text-align:center;'>B</td>";
                                    }
                                    echo "<td class='col-1' style='text-align:center; margin-right:10px;'><img src='loupe.png' width='24' height='24'></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "No result";
                            }
                        } elseif ($searchby != "Select Search" && $category == "Select Category") {
                            //echo "3";
                            $query = "SELECT * FROM booksinfomation WHERE ($searchby LIKE '%$search%')";
                            $result = $mysqli->query($query);
                            if ($result) {
                                echo "<table class='table'>";
                                while ($row = $result->fetch_array()) {
                                    echo "<tr>";
                                    echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                                    echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                                    echo "<td class='col-2' style='text-align:center;'>" . $row["publisher"] . "</td>";
                                    if ($row["available_amount"] == 0) {
                                        echo "<td class='col-1' style='background-color:red; text-align:center;'>B</td>";
                                    } else {
                                        echo "<td class='col-1' style='background-color:lightgreen; text-align:center;'>B</td>";
                                    }
                                    echo "<td class='col-1' style='text-align:center; margin-right:10px;'><img src='loupe.png' width='24' height='24'></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "No result";
                            }
                        } else {
                            //echo "4";
                            $query = "SELECT * FROM booksinfomation WHERE ($searchby LIKE '%$search%' AND genre LIKE '%$category%')";
                            $result = $mysqli->query($query);
                            if ($result) {
                                echo "<table class='table'>";
                                while ($row = $result->fetch_array()) {
                                    echo "<tr>";
                                    echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                                    echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                                    echo "<td class='col-2' style='text-align:center;'>" . $row["publisher"] . "</td>";
                                    if ($row["available_amount"] == 0) {
                                        echo "<td class='col-1' style='background-color:red; text-align:center;'>B</td>";
                                    } else {
                                        echo "<td class='col-1' style='background-color:lightgreen; text-align:center;'>B</td>";
                                    }
                                    echo "<td class='col-1' style='text-align:center; margin-right:10px;'><img src='loupe.png' width='24' height='24'></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "No result";
                            }
                        }
                    } elseif ($category != "Select Category") {
                        $query = "SELECT * FROM booksinfomation WHERE genre LIKE '%$category%'";
                        $result = $mysqli->query($query);
                        if ($result) {
                            echo "<table class='table'>";
                            while ($row = $result->fetch_array()) {
                                echo "<tr>";
                                echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                                echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                                echo "<td class='col-2' style='text-align:center;'>" . $row["publisher"] . "</td>";
                                if ($row["available_amount"] == 0) {
                                    echo "<td class='col-1' style='background-color:red; text-align:center;'>B</td>";
                                } else {
                                    echo "<td class='col-1' style='background-color:lightgreen; text-align:center;'>B</td>";
                                }
                                echo "<td class='col-1' style='text-align:center; margin-right:10px;'><img src='loupe.png' width='24' height='24'></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No result";
                        }
                    } else {
                        //echo "5";
                        $query = "SELECT * FROM booksinfomation";
                        $result = $mysqli->query($query);
                        if ($result) {
                            echo "<table class='table'>";
                            while ($row = $result->fetch_array()) {
                                echo "<tr>";
                                echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                                echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                                echo "<td class='col-2' style='text-align:center;'>" . $row["publisher"] . "</td>";
                                if ($row["available_amount"] == 0) {
                                    echo "<td class='col-1' style='background-color:red; text-align:center;'>B</td>";
                                } else {
                                    echo "<td class='col-1' style='background-color:lightgreen; text-align:center;'>B</td>";
                                }
                                echo "<td class='col-1' style='text-align:center; margin-right:10px;'><img src='loupe.png' width='24' height='24'></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No result";
                        }
                    }
                }

                ?>
            </form>

            <!-- Library Map Tab -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="text-center">
                    <img src="Library_Map/FirstFloor.png" class="img-fluid" alt="firstfloor" style="max-width: 75%;">
                </div>
            </div>
            <!-- Profile Tab -->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <!-- Profile title + Returnbook -->
                <?php
                $mysqli = new mysqli("localhost", "root", null, "Barami_Library");
                $userid = $_SESSION['userid'];

                $sql = "SELECT * FROM users WHERE userid = '$userid'";
                $result = $mysqli->query($sql);
                if (!$result) {
                    echo "Select failed!<br/>";
                    echo $mysqli->error;
                } else {
                    $user = $result->fetch_array();
                }


                ?>

                <div class="row" style="height:100px; max-width: 100%;">
                    <span class="col-8" style="margin-left: 200px;top: 100px; text-align: left; font-family: Inter; 
                    font-weight: Light; font-size: 45px; display: flex; justify-content: flex-end; align-content: center; 
                    flex-direction: column;">
                        Profile
                    </span>
                    <div class="col-2" style="width: 15%; margin-top: 25px;">
                        <form role="form" method="post" action="logout.php" style="height: 50px; display: flex; 
                                                                justify-content: center; align-content: center; flex-direction: column;">
                            <input type="submit" class="col btn btn-primary" style="height: 50px; 
                                                                    border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                    border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                    background-color: #264653" value="Return Book" name="returnbook">
                        </form>
                    </div>
                </div>
                <!-- Green box -->
                <form method="post" action="edit_profile.php">
                    <div class="row" style=" max-width: 100%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                        <div class="greenbox" style="width: 700px; height: 370px;">
                            <div class="row">
                                <!-- Title -->
                                <div class="mt-3 mb-3 row" style="margin-left: 10px;">
                                    <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        Title</label>
                                    <div class="col-4">
                                        <select class="form-select" style="width: 100px; font-family: Inter; font-weight: Light; font-size: 18px;" name="title">
                                            <option value="" <?php if ($user["title"] == "Mr.") {
                                                                    echo "selected";
                                                                } ?>>Title</option>
                                            <option <?php if ($user["title"] == "Mr.") {
                                                        echo "selected";
                                                    } ?>>Mr.</option>
                                            <option <?php if ($user["title"] == "Mrs.") {
                                                        echo "selected";
                                                    } ?>>Mrs.</option>
                                            <option <?php if ($user["title"] == "Ms.") {
                                                        echo "selected";
                                                    } ?>>Ms.</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Name -->
                                <div class="mb-3 row" style="margin-left: 10px;">
                                    <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        Name</label>
                                    <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        <input type="text" class="form-control" name="firstname" value="<?php echo $user["firstname"] ?>">
                                    </div>
                                </div>
                                <!-- Surname -->
                                <div class="mb-3 row" style="margin-left: 10px;">
                                    <label class="col-2 col-form-label" style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        Surname</label>
                                    <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        <input type="text" class="form-control" name="lastname" value="<?php echo $user["lastname"] ?>">
                                    </div>
                                </div>
                                <!-- Age + BirthDate-->
                                <div class="mb-3 row" style="margin-left: 10px;">
                                    <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        Age</label>
                                    <div class="col-2" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        <input type="text" class="form-control" name="age" value="<?php echo $user["age"] ?>">
                                    </div>
                                    <label class="col-2 col-form-label " style="text-align: center; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        BirthDate</label>
                                    <div class="col-3" style="width: 31%; display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        <input type="date" class="form-control" name="birthdate" value="<?php echo $user["birthdate"] ?>">
                                    </div>

                                </div>
                                <!-- Gender + Usergroup-->
                                <div class="mb-3 row" style="margin-left: 10px;">
                                    <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        Gender</label>
                                    <div class="col-3">
                                        <select class="form-select" style=" font-family: Inter; font-weight: Light; font-size: 18px;" name="gender">
                                            <option value="" <?php if ($user["gender"] == "Male") {
                                                                    echo "selected";
                                                                } ?>>Gender</option>
                                            <option <?php if ($user["gender"] == "Male") {
                                                        echo "selected";
                                                    } ?>>Male</option>
                                            <option <?php if ($user["gender"] == "Female") {
                                                        echo "selected";
                                                    } ?>>Female</option>
                                        </select>
                                    </div>
                                    <label class="col-3 col-form-label" style="width:25%; text-align: center; font-family: Inter; font-weight: Light; 
                                        font-size: 18px; display: flex; justify-content: center; align-content: center; 
                                        flex-direction: column;">User Group</label>
                                    <div class="col-3">
                                        <select class="form-select" style=" width: 170px; font-family: Inter; font-weight: Light; font-size: 18px;" name="usergroup">
                                            <option value="" <?php if ($user["usergroup"] == "Student") {
                                                                    echo "selected";
                                                                } ?>>User Group</option>
                                            <option <?php if ($user["usergroup"] == "Student") {
                                                        echo "selected";
                                                    } ?>>Student</option>
                                            <option <?php if ($user["usergroup"] == "Professor") {
                                                        echo "selected";
                                                    } ?>>Professor</option>
                                            <option <?php if ($user["usergroup"] == "Other") {
                                                        echo "selected";
                                                    } ?>>Other</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- email -->
                                <div class="mb-3 row" style="margin-left: 10px;">
                                    <label class="col-2 col-form-label " style="text-align: left; font-family: Inter; font-weight: Light; font-size: 18px; 
                                        display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        Email</label>
                                    <div class="col-8" style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
                                        <input type="text" class="form-control" name="email" value="<?php echo $user["email"] ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="max-width: 100%;">
                        <div class="col-9" style="width: 70%;">

                        </div>
                        <div class="col-2" style="width: 15%; margin-top: 25px;">
                            <input type="submit" class="col btn btn-primary" style="height: 50px; 
                                                border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                background-color: #264653" value="Edit Profile" name="editprofile">
                        </div>
                        <div class="col-2" style="width: 15%; margin-top: 25px;">
                            <form role="form" method="post" action="logout.php" style="height: 50px; display: flex; 
                                                                justify-content: center; align-content: center; flex-direction: column;">
                                <input type="submit" class="col btn btn-primary" style="height: 50px; 
                                                                    border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; 
                                                                    border-bottom-right-radius: 35px; font-family: Inter; font-weight: Light; font-size: 18px; 
                                                                    background-color: #eb7179; " value="Log Out" name="logout">
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>