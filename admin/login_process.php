<?php
require 'includes/connect.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$loginSQL = "SELECT * FROM `admin` WHERE a_email='$email' AND a_password='$password'";

$result = mysqli_query($conn, $loginSQL);

if (mysqli_num_rows($result) == 1) {
    while ($row = $result->fetch_assoc()) {
        $a_id = $row['a_id'];
        $a_name = $row['a_name'];
    }
    $_SESSION["a_name"] = $a_name;
    $_SESSION["a_id"] = $a_id;

    echo '<script>window.location.href="index.php"</script>';
} else {
    echo '<script>alert("Login Failed")</script>';
    echo '<script>window.location.href="login.php"</script>';
}

?>