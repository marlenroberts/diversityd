<?php
require_once 'database.php';
class work_log {

    private $db;

    function __construct() {
        $this->db = database::connect();
    }

    public function get_log_entries() {
        $stmt = $this->db->prepare('SELECT * FROM work_log');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function add_log_entry($params) {
        $stmt = $this->db->prepare('INSERT INTO work_log (start, end, customer, location, service, billable, mileage, notes) VALUES (:start, :end, :customer, :location, :service, :billable, :mileage, :notes)');
        return $stmt->execute($params);
    }

    public function log_entry_rows() {
        $data = $this->get_log_entries();
        // prepare the html
        $rows = '';
        foreach ($data as $row) {
            $rows .= '<tr>';
            $rows .= '<td>' . date('h:i A', $row['start']) . '</td>';
            $rows .= '<td>' . date('h:i A', $row['end']) . '</td>';
            $rows .= '<td>' . $row['customer'] . '</td>';
            $rows .= '<td>' . $row['location'] . '</td>';
            $rows .= '<td>' . $row['service'] . '</td>';
            $rows .= '<td>' . $row['billable'] . '</td>';
            $rows .= '<td>' . $row['mileage'] . '</td>';
            $rows .= '<td>' . $row['notes'] . '</td>';
            $rows .= '</tr>';
        }
        return $rows;
    }
}
