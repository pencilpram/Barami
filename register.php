<?php
$mysqli = new mysqli("localhost", "root", null, "Barami_Library2");

if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
}

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

if (trim($username) == "") {
    echo "Please input Username!";
    exit();
}

if (trim($password) == "") {
    echo "Please input Password!";
    exit();
}

if (trim($firstname) == "") {
    echo "Please input Firstname!";
    exit();
}

if (trim($lastname) == "") {
    echo "Please input Lastname!";
    exit();
}

if (trim($age) == "") {
    echo "Please input Age!";
    exit();
}

if (trim($email) == "") {
    echo "Please input Email!";
    exit();
}

//เมื่อทุกอย่างผ่านหมดแล้ว เช็คข้อมูลซ้ำจากฐานข้อมูล
$sql = "SELECT * FROM users WHERE username = '$username'|| email = '$email'";
$result = mysqli_query($mysqli, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {
    echo "Username or Email already exists!";
} else {
    // GET LAST UNIQUE ID
    $query = "SELECT MAX(TRIM(LEADING 'U' FROM `userid`)) as user_id FROM `users`;";
    $result = $mysqli->query($query) or die('There was an error running the query [' . $mysqli->error . ']');
    // ADD +1 WITH LAST UNIQUE ID
    $row = $result->fetch_assoc();
    $last_user_id = empty($row['user_id']) ? 00 : $row['user_id'];
    $next_user_id = 'U' . ($last_user_id + 1);

    $query1 = "INSERT INTO users (username,password,firstname,lastname,usergroup,title,gender,email,birthdate) 
    VALUES ('$username','$password','$firstname','$lastname','$usergroup','$title','$gender','$email','$birthdate',)";
    
    $result1 = mysqli_query($mysqli, $strSQL);

    echo "Register Completed!<br>";

    echo "<br> Go to <a href='Final-Login.html'>Login page</a>";
}

mysqli_close($mysqli);
?>

