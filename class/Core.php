<?php
require "DBConnection.php";

class Core extends DBConnection {
    public function __construct() {
        parent::__construct();
    }

    function getRegionByIP($ip) {
        $apiUrl = "http://ip-api.com/json/" . $ip;
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);

        if ($data && $data['status'] === 'success') {
            return $data['regionName'];
        } else {
            return "Regione Sconosciuta";
        }
    }

}