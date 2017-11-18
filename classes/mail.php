<?php
function SendEmail($to, $subject, $text, $html) {

    // set up the mailer instance
    $smtp = Mail::factory('smtp', array(
        'host' => 'secure.emailsrvr.com',
        'port' => '587',
        'auth' => true,
        'username' => 'admin@intellectusstatistics.com',
        'password' => 'Treelore91$'
    ));

    // set up message headers
    $headers = array(
        'From' => 'admin@diversityd.com',
        'To' => $to,
        'Return-Path' => 'admin@diversityd.com',
        'Subject' => $subject,
    );

    // prepare the message content
    $mime = new Mail_mime(array('eol' => "\n"));
    $mime->setTXTBody($text);
    $mime->setHTMLBody($html);
    $newBody = $mime->get();
    $headers = $mime->headers($headers);

    // send the message
    $mail = $smtp->send($to, $headers, $newBody);

    // check for errors
    if (PEAR::isError($mail)) {
        echo $mail->getMessage();
    }
}
?>