<?php
session_start();
if (!isset($_POST['submit'])) {
    echo '<script>window.location.href="e403.php"</script>';
}
$purpose = "Payment";
$amount = $_POST["price"];
$name = $_POST["name"];
$phone = 7265906640;
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];

if (!empty($_POST["address"]) && !empty($_POST["city"]) && !empty($_POST["address"]) && !empty($_POST["zip"]) && !empty($_POST["state"])) {
    $_SESSION['amount'] = $amount;
    $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;
    $_SESSION['city'] = $city;
    $_SESSION['state'] = $state;
    $_SESSION['zip'] = $zip;

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            "X-Api-Key:test_030c0023f20a4b9e3af7ad0a8ca",
            "X-Auth-Token:test_79cd0e2719dbb081c0d12d452ef"
        )
    );
    $payload = array(
        'purpose' => $purpose,
        'amount' => $amount,
        'phone' => $phone,
        'buyer_name' => $name,
        'redirect_url' => 'http://localhost/hopeforpaws/thankyou.php',

        'send_email' => true,
        'send_sms' => true,
        'email' => $email,
        'allow_repeated_payments' => false
    );
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    $response = curl_exec($ch);
    curl_close($ch);


    $response = json_decode($response);
    echo "<pre>";
    print_r($response);
     header('location:' . $response->payment_request->longurl);
} else {

    $error = true;
    $_SESSION['error'] = "All Field Cannot be Empty";
    echo '<script>
    window.location.href = "pay.php?error=true"
    </script>';

    exit();
}