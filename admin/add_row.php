<?php

$start = $_POST['start'];
$end = $_POST['end'];
$customer = $_POST['customer'];
$location = $_POST['location'];
$service = $_POST['service'];
$billable = $_POST['billable'];
$mileage = $_POST['mileage'];
$notes = $_POST['notes'];

// load db
require_once __DIR__ . '/classes/work_log.php';
$w = new work_log();
$add = $w->add_log_entry(
    array(
        ':start' => strtotime($start),
        ':end' => strtotime($end),
        ':customer' => $customer,
        ':location' => $location,
        ':service' => $service,
        ':billable' => $billable,
        ':mileage' => $mileage,
        ':notes' => $notes
    )
);

if ($add) {
    echo $w->log_entry_rows();
} else {
    http_response_code(500);
}
