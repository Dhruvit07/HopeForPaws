<?php

require 'includes/connect.php';
session_start();
//Block User
if (isset($_GET['accept'])) {
    $u_id = $_GET['accept'];
    $block = $conn->query("UPDATE `adoption` SET status='1' WHERE ad_id='$u_id'");
    if ($block) {
        echo '<script>window.location.href="adoption.php"</script>';
    } else {
        echo '<script>alert("Error in Acceptance")</script>';
        echo '<script>window.location.href="adoption.php"</script>';
    }
}
//Unblock User
if (isset($_GET['reject'])) {
    $u_id = $_GET['reject'];
    $block = $conn->query("UPDATE `adoption` SET status='2' WHERE ad_id='$u_id'");
    if ($block) {
        echo '<script>window.location.href="adoption.php"</script>';
    } else {
        echo '<script>alert("Error in Rejecting")</script>';
        echo '<script>window.location.href="adoption.php"</script>';
    }
}
echo '<script>window.location.href="../adoption.php"</script>';
?>