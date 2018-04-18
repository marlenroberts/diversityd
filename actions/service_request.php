<?php
// validate inputs
$any_invalid = false;
foreach ($_POST as $key => $value) {
    // skip location since it isn't required
    if ($key == 'location') {
        continue;
    }
    // if there are any errors, redirect back to service request page with query parameters
    if (strlen(trim($value)) == 0) {
        header('Location: http://diversityd.com/service_request.php?error=1&' . http_build_query($_POST));
        exit();
    }
}

// define variables if the inputs are valid
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = preg_replace('/[^\d]+/', '', trim($_POST['phone']));
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$location = trim($_POST['location']);
$message = trim($_POST['message']);

// send the mail
$to = 'daniroberts63@gmail.com';
$subject = 'Service Request';
$body = "Name:\t\t" . $name . "\n";
$body .= "Email:\t\t" . $email . "\n";
$body .= "Phone:\t\t" . $phone . "\n";
$body .= "City:\t\t" . $city . "\n";
$body .= "Location:\t" . $location . "\n\n";
$body .= $message . "\n";
$headers = "From: admin@diversityd.com\r\n";
mail($to, $subject, $body, $headers);

// redirect to success page
header('Location: http://diversityd.com/success.php');
exit();
?>
