<?php
$to = 'roberts.marlen@gmail.com';
$subject = 'Service Request';
$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
die();
array(
    'valid_name' => 1,
    'valid_email' => 1,
    'valid_phone' => 1,
    'valid_city' => 1,
    'valid_state' => 1,
    'valid_message' => 0
);
header('Location: /service_request.php?');
exit();


header('Location: /success.php');
exit();
?>