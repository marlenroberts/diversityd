<?php
session_start();

// set default field values
$name = '';
$email = '';
$phone = '';
$city = '';
$state = '';
$location = '';
$message = '';
$error_message = '';

$name_class = 'normal';
$email_class = 'normal';
$phone_class = 'normal';
$city_class = 'normal';
$state_class = 'normal';
$location_class = 'normal';
$message_class = 'normal';

// check for previous values and update them
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
if (isset($_SESSION['phone'])) {
    $phone = $_SESSION['phone'];
}
if (isset($_SESSION['city'])) {
    $city = $_SESSION['city'];
}
if (isset($_SESSION['state'])) {
    $state = $_SESSION['state'];
}
if (isset($_SESSION['location'])) {
    $location = $_SESSION['location'];
}
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}
if (isset($_GET['error'])) {
    $error_message = '<span>Please fill out the empty fields.</span>';
    if ($name == '') {
        $name_class = 'error';
    }
    if ($email == '') {
        $email_class = 'error';
    }
    if ($phone == '') {
        $phone_class = 'error';
    }
    if ($city == '') {
        $city_class = 'error';
    }
    if ($state == '') {
        $state_class = 'error';
    }
    if ($message == '') {
        $message_class = 'error';
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diversity D Inc. | Service Request</title>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="page">
        <?php include __DIR__ . '/templates/header.html'; ?>
        <div class="content">
            <div id="error_container"><?php echo $error_message; ?></div>
            <form id="service_request_form" method="post" action="/actions/service_request.php">
                <div style="display: inline-block; width: 300px; box-sizing: border-box; padding-right: 10px;">
                    <label>Name:</label>
                    <input class="<?php echo $name_class; ?>" type="text" name="name" placeholder="John Doe" value="<?php echo $name; ?>">
                    <label>Email:</label>
                    <input class="<?php echo $email_class; ?>" type="text" name="email" placeholder="example@example.com" value="<?php echo $email; ?>">
                    <label>Phone:</label>
                    <input class="<?php echo $phone_class; ?>" type="text" name="phone" placeholder="(555)-555-5555" value="<?php echo $phone; ?>">
                </div>
                <div style="display: inline-block; width: 300px; box-sizing: border-box; padding-right: 10px;">
                    <label>City:</label>
                    <input class="<?php echo $city_class; ?>" type="text" name="city" placeholder="Name of City" value="<?php echo $city; ?>">
                    <label>State:</label>
                    <input class="<?php echo $state_class; ?>" type="text" name="state" placeholder="Name of State" value="<?php echo $state; ?>">
                    <label>Field Location:</label>
                    <input class="<?php echo $location_class; ?>" type="text" name="location" placeholder="5 Miles NW" value="<?php echo $location; ?>">
                </div>
                <div style="display: inline-block; width: 600px; box-sizing: border-box; padding-right: 10px;">
                    <label>Message/Service Request:</label>
                    <textarea class="<?php echo $message_class; ?>" name="message" form="service_request_form" placeholder="Enter Service Request Description" style="width: 587px; height: 200px; resize: none;"><?php echo $message; ?></textarea>
                </div>
                <div style="text-align: right; width: 600px; padding-right: 7px; box-sizing: border-box;">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <?php include __DIR__ . '/templates/footer.html'; ?>
    </div>
</body>
</html>