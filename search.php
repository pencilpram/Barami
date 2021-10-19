 <?php
    // Connect to the database
    $mysqli = new mysqli("localhost", "root", null, "Barami_Library");

    if ($mysqli->connect_errno) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $search = $_GET['query'];

    if (isset($_GET["querytype"]) == "Select Search" && (isset($_GET["category"]) == "Select Category")) {
        $query = "SELECT booktitle, authorsname, genre FROM booksinfomation WHERE (booktitle LIKE '%$search%')
        OR (authorsname LIKE '%$search%') OR (genre LIKE '%$search%')";
        $result = $mysqli->query($query);
        if ($result) {
            while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td class='col-2'>" . $row["booktitle"] ."</td>";
            echo "<td class='col-4'>" . $row["authorsname"] . "</td>";
            echo "<td class='col-2'>" . $row["genre"] . "</td>";
            echo "</tr>";
            }
        }else{
            echo "Error:" . $mysqli->error;
        }
    }


    ?>