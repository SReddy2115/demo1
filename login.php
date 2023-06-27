<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted OTP
    $otp = $_POST['otp'];

    session_start();
    // Retrieve the stored OTP from the session
    $storedOtp = $_SESSION['otp'];

    if ($otp == $storedOtp) {
        // Successful OTP verification
        // Perform login actions or redirect to the home page
        header('Location: home.html');
        exit();
    } else {
        // Invalid OTP, redirect back to the OTP verification page
        header('Location: verify_otp.html');
        exit();
    }
} else {
    // Redirect to the login page if accessed directly without POST request
    header('Location: index.html');
    exit();
}
?>
