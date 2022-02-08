<?php
// Imports
require '../includes/connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("location: e403.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    //Data Fetch
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Query
    $login_sql = "SELECT * FROM `user` WHERE u_email='$email' AND u_password = '$password'";

    $result = $conn->query($login_sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $u_id = $row['u_id'];
            $u_email = $row['u_email'];
            $u_name = $row['u_name'];
            $u_status = $row['u_status'];


            if ($u_status != 1) {
                $_SESSION['loggedin'] = true;
                $_SESSION['u_id'] = $u_id;
                $_SESSION['u_email'] = $u_email;
                $_SESSION['u_name'] = $u_name;
            }else{
                $error = true;
                $_SESSION['error'] = "Contact Administrator";
                echo '<script>window.location.href="../index.php?error=true"</script>';

                exit();
            }
        }

        echo '<script>window.location.href="../index.php"</script>';
    } else {

        $error = true;
        $_SESSION['error'] = "Incorrect Credentials!";
        echo '<script>window.location.href="../index.php?error=true"</script>';

        exit();
    }
}
