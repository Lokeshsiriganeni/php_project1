<?php
session_start(); // Start the session to access session variables

// Example of OTP stored in session (you should set this when generating OTP)
if (!isset($_SESSION['otp'])) {
    $_SESSION['otp'] = '123456'; // This should be set dynamically
}

// Retrieve the OTP entered by the user
$enteredOtp = isset($_POST['otp']) ? implode('', $_POST['otp']) : '';

// Validate the OTP
if ($enteredOtp === $_SESSION['otp']) {
    echo "OTP Verified Successfully!";
    // Optionally, you can clear the OTP from the session after successful verification
    unset($_SESSION['otp']);
} else {
    echo "Invalid OTP. Please try again.";
}
?>
