<?php

require 'includes/connect.php';
session_start();

$category = $_POST['categories'];
$uid = $_SESSION['a_id'];

echo $category;

$categorySQL = "INSERT INTO `category`(`cat_name`) VALUES ('$category')";

$result = $conn->query($categorySQL);

if ($result) {
    echo '<script>window.location.href="addCategories.php"</script>';
} else {
    echo '<script>alert("Data Not Inserted")</script>';
    echo '<script>window.location.href="addCategories.php"</script>';
}

?>