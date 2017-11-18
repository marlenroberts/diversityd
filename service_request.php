<?php
$name_error = '';
$email_error = '';
$phone_error = '';
$city_error = '';
$state_error = '';
$loc_error = '';
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
            <form id="service_request_form" method="post" action="/actions/service_request.php">
                <div style="display: inline-block; width: 300px; box-sizing: border-box; padding-right: 10px;">
                    <label>Name:<?php echo $name_error; ?></label>
                    <input type="text" name="name" placeholder="John Doe">
                    <label>Email:<?php echo $email_error; ?></label>
                    <input type="text" name="email" placeholder="example@example.com">
                    <label>Phone:<?php echo $phone_error; ?></label>
                    <input type="text" name="phone" placeholder="(555)-555-5555">
                </div>
                <div style="display: inline-block; width: 300px; box-sizing: border-box; padding-right: 10px;">
                    <label>City:<?php echo $city_error; ?></label>
                    <input type="text" name="city" placeholder="Name of City">
                    <label>State:<?php echo $state_error; ?></label>
                    <input type="text" name="state" placeholder="Name of State">
                    <label>Field Location:<?php echo $loc_error; ?></label>
                    <input type="text" name="location" placeholder="5 Miles NW">
                </div>
                <div style="display: inline-block; width: 600px; box-sizing: border-box; padding-right: 10px;">
                    <label>Message/Service Request:</label>
                    <textarea name="message" form="service_request_form" placeholder="Enter Service Request Description" style="width: 587px; height: 200px; resize: none;"></textarea>
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