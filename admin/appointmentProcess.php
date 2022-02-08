<?php

require 'includes/connect.php';
session_start();
//Block User


if (isset($_GET['accept'])) {
    $u_id = $_GET['accept'];
    $block = $conn->query("UPDATE `appointment` SET apo_status='1' WHERE apo_id='$u_id'");
    if ($block) {
        echo '<script>window.location.href="../appointment.php"</script>';
    } else {
        echo '<script>alert("Error in Acceptance")</script>';
        echo '<script>window.location.href="../appointment.php"</script>';
    }
}
//Unblock User
if (isset($_GET['reject'])) {
    $u_id = $_GET['reject'];
    $block = $conn->query("UPDATE `appointment` SET apo_status='2' WHERE apo_id ='$u_id'");

    echo $block;
    if ($block) {
        echo '<script>window.location.href="../appointment.php"</script>';
    } else {
        echo '<script>alert("Error in Rejecting")</script>';
        echo '<script>window.location.href="../appointment.php"</script>';
    }
}
echo '<script>window.location.href="../appointment.php"</script>';
?>