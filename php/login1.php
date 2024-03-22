<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_det WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ==1) {
        echo json_encode(array("status" => "success", "message" => "Login successful"));
    } else {
        echo json_encode(array("status" => "error", "message" => "Invalid email or password"));
    }
} else {
    header("Location: profile.php");
    exit();
}
?>
