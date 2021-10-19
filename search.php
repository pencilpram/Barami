 <?php
    // Connect to the database
    $mysqli = new mysqli("localhost", "root", null, "Barami_Library");

    if ($mysqli->connect_errno) {
        echo $mysqli->connect_error;
    }

    if (isset($_POST["querytype"]) == "Select Search" && (isset($_GET["category"]) == "Select Category")) {
        $query = "SELECT booktitle, authorsname, genre FROM booksinformation WHERE (booktitle LIKE '%$search%')
        OR (authorsname LIKE '%$search%') OR (genre LIKE '%$search%')";
        echo "<tr>";
        echo "<td class='col-2'>$query</td>";
        echo "<td class='col-4'>$query</td>";
        echo "<td class='col-2'>$query</td>";
        echo "</tr>";
    }


    ?>