<?php
    require 'includes/connect.php';
    session_start();

    $uid =$_SESSION['u_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $msg = $_POST['msg'];


    $app = "INSERT INTO `appointment`(`u_id`, `apodate`, `apotime`, `apo_msg`) VALUES ('$uid','$date','$time','$msg')";

    $result = $conn->query($app);

    if ($result){
        $error = true;
        $_SESSION['success'] = "Appointment Booked Wait For Confirmation.";
        echo '<script>window.location.href="appointment.php"</script>';
    }else{
        $error = true;
        $_SESSION['error'] = "Some Error Occurred.";
        echo '<script>window.location.href="appointment.php"</script>';
    }
?>