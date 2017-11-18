<?php
session_start();

// validate inputs
$any_invalid = false;
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
    if ($key == 'location') {
        continue;
    }
    if (strlen(trim($value)) == 0) {
        $any_invalid = true;
    }
}

// if any inputs are empty, send back the info
if ($any_invalid) {
    header('Location: /service_request.php?error=1');
    exit();
}

// define variables if the inputs are valid
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$location = trim($_POST['location']);
$message = trim($_POST['message']);

// send the mail
$to = 'roberts.marlen@gmail.com';
$subject = 'Service Request';
$message = "Name:\r\n" . $name . "\r\n\r\n";
$message .= "Email:\r\n" . $email . "\r\n\r\n";
$message .= "Phone:\r\n" . $phone . "\r\n\r\n";
$message .= "City:\r\n" . $city . "\r\n\r\n";
$message .= "Location:\r\n" . $location . "\r\n\r\n";
$message .= "Message:\r\n" . $message . "\r\n\r\n";
$headers = "From: admin@diversityd.com\r\n";
$headers .= "Reply-To: admin@diversityd.com\r\n";
mail($to, $subject, $message, $headers);

// redirect to success page
$_SESSION = array();
header('Location: /success.php');
exit();
?>
