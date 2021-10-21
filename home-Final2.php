<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "Barami_Library");

if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}
// $search = $_POST['query'];
?>
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
            <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist" style="border-color: rgba(0, 0, 0, 0.5); font-family: Inter;
    font-weight: Light;
    font-size: 18px;">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" style="border-color: rgba(0, 0, 0, 0.5); border-top-left-radius: 0;
    border-top-right-radius: 0">Library</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style="border-color: rgba(0, 0, 0, 0.5); border-top-left-radius: 0;
    border-top-right-radius: 0">Library Map</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="border-color: rgba(0, 0, 0, 0.5); border-top-left-radius: 0;
    border-top-right-radius: 0">Profile</button>
            </div>
        </nav>
        <!-- Content -->
        <div class="tab-content" id="nav-tabContent">
            <!-- Library Tab -->
            <form class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" action="home-Final2.php" method="get">
                <div class="row" style="margin-top: 10px; margin-left: 10px; margin-right:0;">
                    <div class="col-2" style="width:200px;">
                        <select class="form-select" style="font-family: Inter; font-weight: Light; font-size: 16px;" name="querytype">
                            <option value="">Select Search</option>
                            <option>Book Name</option>
                            <option>Author Name</option>
                            <option>Publisher</option>
                        </select>
                    </div>
                    <div class="col-6" style="padding: 0; width: 900px;">
                        <input type="text" class="form-control" placeholder="Search" aria-label="First name" style="font-family: Inter; font-weight: Light; font-size: 16px;" name="query">
                    </div>
                    <div class="col-2" style="width:200px;">
                        <select class="form-select" style="font-family: Inter; font-weight: Light; font-size: 16px;" name="category">
                            <option value="">Select Category</option>
                            <option>Fantasy Fiction</option>
                            <option>Child Book</option>
                        </select>
                    </div>

                    <input type="submit" class="col btn btn-primary" style="margin-right: 20px; border-top-left-radius: 35px;
    border-top-right-radius: 35px; border-bottom-left-radius: 35px; border-bottom-right-radius: 35px; font-family: Inter;
    font-weight: Light; font-size: 16px; background-color: #264653" value="Search" name="search">
                </div>
            </form>

            <div class="row" style="margin-top: 30px; padding:8px;">
                <div class="col-4" style="width:480px; text-align:center;">
                    <span>Book Name</span>
                </div>
                <div class="col-4" style="width:480px; text-align:center">
                    <span>Author Name</span>
                </div>
                <div class="col-2" style="width:240px; text-align:center">
                    <span>Category</span>
                </div>
                <div class="col-1" style="width: 120px;"></div>
                <div class="col-1" style="width: 120px;"></div>
                
            </div>

</html>
<?php
if (isset($_GET['query'])) {
    $search = $_GET['query'];
    $searchby = $_GET["querytype"];
    $category = $_GET["category"];
    if (isset($_GET["querytype"]) == "Select Search" && (isset($_GET["category"]) == "Select Category")) {
        $query = "SELECT * FROM booksinfomation WHERE (booktitle LIKE '%$search%')
        OR (authorsname LIKE '%$search%') OR (genre LIKE '%$search%')";
        $result = $mysqli->query($query);
        if ($result) {
            echo "<table class='table'>";
            while ($row = $result->fetch_array()) {
                echo "<tr>";
                echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                echo "<td class='col-2' style='text-align:center;'>" . $row["genre"] . "</td>";
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
            echo "Error:" . $mysqli->error;
        }
    
    }elseif (isset($_GET["querytype"])=="Select Search"&& (isset($_GET["category"]) != "Select Category")) {
        $query = "SELECT * FROM booksinfomation WHERE ((genre LIKE '%$category%') and (booktitle LIKE '%$search%'))
        OR ((genre LIKE '%$category%') and (authorsname LIKE '%$search%')) OR ((genre LIKE '%$category%') and (publisher LIKE '%$search%'))";
        $result = $mysqli->query($query);
        if ($result) {
            echo "<table class='table'>";
            while ($row = $result->fetch_array()) {
                echo "<tr>";
                echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                echo "<td class='col-2' style='text-align:center;'>" . $row["genre"] . "</td>";
                if ($row["available_amount"] == 0) {
                    echo "<td class='col-1' style='background-color:red; text-align:center;'>B</td>";
                } else {
                    echo "<td class='col-1' style='background-color:lightgreen; text-align:center;'>B</td>";
                }
                echo "<td class='col-1' style='text-align:center; margin-right:10px;'><img src='loupe.png' width='24' height='24'></td>";
                echo "</tr>";
            }
            echo "</table>";
        }

    }elseif (isset($_GET["querytype"]) == "Author Name" && (isset($_GET["category"]) == "Select Category")) {
        $query = "SELECT * FROM booksinfomation WHERE (authorsname LIKE '%$search%')";
        $result = $mysqli->query($query);
        if ($result) {
            echo "<table class='table'>";
            while ($row = $result->fetch_array()) {
                echo "<tr>";
                echo "<td class='col-4' style='text-align:center;'>" . $row["booktitle"] . "</td>";
                echo "<td class='col-4' style='text-align:center;'>" . $row["authorsname"] . "</td>";
                echo "<td class='col-2' style='text-align:center;'>" . $row["genre"] . "</td>";
                if ($row["available_amount"] == 0) {
                    echo "<td class='col-1' style='background-color:red; text-align:center;'>B</td>";
                } else {
                    echo "<td class='col-1' style='background-color:lightgreen; text-align:center;'>B</td>";
                }
                echo "<td class='col-1' style='text-align:center; margin-right:10px;'><img src='loupe.png' width='24' height='24'></td>";
                echo "</tr>";
            }
            echo "</table>";
    }
    }
}


?>
<html>
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>




</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>


