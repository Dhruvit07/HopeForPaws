<?php
require '../includes/connect.php';
session_start();

//Delete Product'
if (isset($_GET['deleteProduct'])) {
    $u_id = $_GET['deleteProduct'];
    $block = $conn->query("DELETE FROM `product` WHERE p_id='$u_id'");
    if ($block) {
//        echo '<script>alert("User Blocked")</script>';
        echo '<script>window.location.href="../addProduct.php"</script>';

    } else {
        echo '<script>alert("Error in Deleting")</script>';
        echo '<script>window.location.href="../addProduct.php"</script>';

    }
}
header("Location:../addProduct.php");
echo '<script>window.location.href="../addProduct.php"</script>';

?>