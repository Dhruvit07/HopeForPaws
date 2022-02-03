<?php
    require 'includes/connect.php';
    session_start();

    $uid =$_SESSION['u_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $msg = $_POST['msg'];


    $app = "INSERT INTO `appointment`(`apo_id`, `u_id`, `apodate`, `apotime`, `apo_msg`, `apo_status`) VALUES";

?>