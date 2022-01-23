<?php
session_start();
require 'includes/connect.php';

$uid = $_SESSION['u_id'];
$pet_id = $_POST['pet'];

$requestQuery = "INSERT INTO `adoption` (`pet_id`, `u_id`) VALUES ('$uid',$pet_id);";

$result = $conn->query($requestQuery);

if ($result) {
    echo '<script>window.location.href="adoption.php"</script>';
} else {
    echo '<script>alert("Data Not Inserted")</script>';
    echo '<script>window.location.href="adoption.php"</script>';
}
?>