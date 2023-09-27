<?php
class Core extends DBConnection {
    public function __construct() {
        parent::__construct();
    }

    public function logVisita($urlVisualizzato, $statoUtente) {
        $ipUtente = $this->getIPAddress();
        $regioneUtente = $this->getRegioneByStato($statoUtente);
        $orario = date('Y-m-d H:i:s');

        $sql = "INSERT INTO visite (ip, regione, orario, url_visualizzato) 
                VALUES ('$ipUtente', '$regioneUtente', '$orario', '$urlVisualizzato')";

        if ($this->conn->query($sql) === TRUE) {
            return "Record inserito con successo nella tabella 'visite'.";
        } else {
            return "Errore nell'inserimento del record: " . $this->conn->error;
        }
    }

    private function getIPAddress() {
        // Implementa la logica per ottenere l'IP dell'utente
        return $_SERVER['REMOTE_ADDR'];
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