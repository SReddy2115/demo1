<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted mobile number
    $mobileNumber = $_POST['mobileNumber'];

    // Generate a random 4-digit OTP
    $otp = mt_rand(1000, 9999);

    // Send the OTP to the user's mobile number using an SMS gateway
    // You would need to integrate with an SMS gateway service for this functionality

    // Store the OTP in a session variable for validation
    session_start();
    $_SESSION['otp'] = $otp;

    // Redirect to the OTP verification page
    header('Location: verify_otp.php');
    exit();
} else {
    // Redirect to the login page if accessed directly without POST request
    header('Location: index.html');
    exit();
}
?>
