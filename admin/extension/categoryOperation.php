<?php
require '../includes/connect.php';
session_start();

//Delete Product'
if (isset($_GET['deleteCategory'])) {
    $u_id = $_GET['deleteCategory'];
    $block = $conn->query("DELETE FROM `category` WHERE cat_id='$u_id'");
    if ($block) {
//        echo '<script>alert("User Blocked")</script>';
        echo '<script>window.location.href="../addCategories.php"</script>';
    } else {
        echo '<script>alert("Error in Deleting")</script>';
        echo '<script>window.location.href="../addCategories.php"</script>';
    }
}
header("Location:../addCategories.php");
echo '<script>window.location.href="../addCategories.php"</script>';

?>