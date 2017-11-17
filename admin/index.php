<?php
require_once __DIR__ . '/classes/work_log.php';
$w = new work_log();

// get the date
if (!isset($_GET['date'])) {
    $rawdate = date('Y-m-d', time());
    $date = date('D, F j, Y', time());
} else {
    $rawdate = date('Y-m-d', strtotime($_GET['time']));
    $date = date('D, F j, Y', strtotime($_GET['time']));
}

$rows = $w->log_entry_rows();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Portal</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th {
                background-color: #efefef;
            }

            th, td {
                text-align: right;
                border-top: 1px solid #efefef;
                border-bottom: 1px solid #efefef;
            }

            .add_row {
                float: right;
            }

            #page {
                padding: 10px;
            }

            label {
                display: block;
                margin: 0;
                font-weight: bold;
            }

            input, select {
                display: block;
                width: 100%;
                height: 30px;
                line-height: 30px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div id="page">
            <h2 style="float: left;">Daily Work Log</h2>
            <h2 style="float: right;"><?php echo $date; ?></h2>
            <table>
                <thead>
                    <tr>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Customer</th>
                        <th>Location</th>
                        <th>Service</th>
                        <th>Billable</th>
                        <th>Mileage</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $rows; ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_row_modal" style="float: right; margin-top: 15px;">Add Row</button>
        </div>
        <div id="add_row_modal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>Start Time:</label>
                        <select id="start_time">
                            <?php
                            for ($hours = 0; $hours < 24; $hours++) {
                                for ($mins = 0; $mins < 60; $mins += 30) {
                                    if ($hours == 0) {
                                        $display_hours = 12;
                                        $ampm = 'AM';
                                    } elseif ($hours > 12) {
                                        $display_hours = $hours - 12;
                                        $ampm = 'PM';
                                    } else {
                                        $display_hours = $hours;
                                        $ampm = 'AM';
                                    }
                                    $h = str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($mins, 2, '0', STR_PAD_LEFT);
                                    $h2 = str_pad($display_hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($mins, 2, '0', STR_PAD_LEFT);
                                    echo '<option value="' . $rawdate . ' ' . $h . ':00">' . $h2 . ' ' . $ampm . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <label>End Time:</label>
                        <select id="end_time">
                            <?php
                            for ($hours = 0; $hours < 24; $hours++) {
                                for ($mins = 0; $mins < 60; $mins += 30) {
                                    if ($hours == 0) {
                                        $display_hours = 12;
                                        $ampm = 'AM';
                                    } elseif ($hours > 12) {
                                        $display_hours = $hours - 12;
                                        $ampm = 'PM';
                                    } else {
                                        $display_hours = $hours;
                                        $ampm = 'AM';
                                    }
                                    $h = str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($mins, 2, '0', STR_PAD_LEFT);
                                    $h2 = str_pad($display_hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($mins, 2, '0', STR_PAD_LEFT);
                                    echo '<option value="' . $rawdate . ' ' . $h . ':00">' . $h2 . ' ' . $ampm . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <label>Customer Name:</label>
                        <input type="text" id="customer_name">
                        <label>Location:</label>
                        <input type="text" id="location">
                        <label>Service:</label>
                        <select id="service">
                            <option>- Select -</option>
                            <option>Admin</option>
                            <option>LABOR-01</option>
                            <option>Travel-EX</option>
                        </select>
                        <label>Billable:</label>
                        <select id="billable">
                            <option>- Select -</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <label>Mileage:</label>
                        <input type="number" id="mileage" value="0">
                        <label>Notes:</label>
                        <input type="text" id="notes">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="add_row()">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            <script>
                function add_row() {
                    $.post('/admin/add_row.php', {
                        start: $('#start_time').val(),
                        end: $('#end_time').val(),
                        customer: $('#customer_name').val(),
                        location: $('#location').val(),
                        service: $('#service').val(),
                        billable: $('#billable').val(),
                        mileage: $('#mileage').val(),
                        notes: $('#notes').val()
                    }).done(function(response) {
                        $('#add_row_modal').modal('hide');
                        $('tbody').html(response);
                    }).fail(function() {
                        console.log('error');
                    });
                }
            </script>
        </div>
    </body>
</html>
