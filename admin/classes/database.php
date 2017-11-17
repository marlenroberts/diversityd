<?php
class database {
    public static function connect() {
        try {
            $db = new PDO('mysql:host=diversitydb.db.3709942.3a4.hostedresource.net;dbname=diversitydb', 'diversitydb', 'DripUS@626351');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $db;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
            return;
        }
    }
}
?>
