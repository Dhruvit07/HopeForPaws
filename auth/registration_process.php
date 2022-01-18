<?php
// Imports
require '../includes/connect.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("location: ../e403.php");
    exit(0);
}
//Data Fetch
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['confirm-password'];
$phone = $_POST['phone'];


$sql = "SELECT * FROM `user` WHERE u_email='$email'";
$result1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result1);

if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $_SESSION['error'] = "Enter a Legit Email";
        echo '<script>window.location.href="../index.php?error=true"</script>';
        exit();
    }

    if (!preg_match('/[^\w .]/', $name)) {
    } else {
        if (preg_match("#[0-9]+#", $name) || preg_match('@[^\w]@', $name)) {
            $_SESSION['error'] = "Your Name Cannot Contain Numbers or Illegal Characters!";
            echo '<script>window.location.href="../index.php?error=true"</script>';
            exit();
        }
    }

    if ($_POST['password'] == $_POST['confirm-password']) {
        if (strlen($password) < 8) {

            $error = true;
            $_SESSION['error'] = "Password Length should be greater than 8";
            echo '<script>window.location.href="../index.php?error=true"</script>';
            exit();
        } elseif (!preg_match("#[0-9]+#", $password)) {
            $_SESSION['error'] = "Your Password Must Contain At Least 1 Number!";
            echo '<script>window.location.href="../index.php?error=true"</script>';

            exit();
        } elseif (!preg_match("#[A-Z]+#", $password)) {
            $_SESSION['error'] = "Your Password Must Contain At Least 1 Capital Letter!";
            echo '<script>window.location.href="../index.php?error=true"</script>';

            exit();
        } elseif (!preg_match("#[a-z]+#", $password)) {
            $_SESSION['error']  = "Your Password Must Contain At Least 1 Lowercase Letter!";
            echo '<script>window.location.href="../index.php?error=true"</script>';
            exit();
        } elseif (!preg_match('@[^\w]@', $password)) {
            $_SESSION['error'] = "Your Password Must Contain At Least 1 Special Character !";
            echo '<script>  window.location.href = "../index.php?error=true"  </script>';

            exit();
        } else {

            if (!preg_match("/^[+]?[1-9][0-9]{9,14}$/", $_POST['phone'])) {
                $error = true;
                $_SESSION['error'] = "Enter a Legit Phone Number";
                echo '<script>
    window.location.href = "../index.php?error=true"
    </script>';

                exit();
            }

            if ($row > 0) {
                $email_exist = true;
                echo '<script>
    window.location.href = "../index.php?exist=true"
    </script>';
                exit();
            } 
            else {
                $insert_sql = "INSERT INTO `user`( `u_name`,`u_phone`, `u_email`, `u_password`, `u_status`) VALUES
                ('$name','$phone','$email','$password',0)";
             
    $result = $conn->query($insert_sql);

    if ($result) {
        echo '<script>window.location.href="../index.php?login=true"</script>';
    } else {
        $_SESSION['error'] = "Registration Failed Try Again!";
        echo '<script>
    window.location.href = "../index.php?error=true"
    </script>';

}


        }
    }  
} 
    else {

        $_SESSION['error'] = "Password And Confirm Password Doesn't Match Password!";
        echo '<script>
    window.location.href = "../index.php?error=true"
    </script>';
        exit();
    }
} else {

    $error = true;
    $_SESSION['error'] = "All Field Cannot be Empty";
    echo '<script>
    window.location.href = "../index.php?error=true"
    </script>';

    exit();
}