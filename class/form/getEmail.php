<?php
require "../Core.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$x = new Core();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['emailSubscription'])) {
        $email = $_POST['emailSubscription'];
        $ip = $_SERVER['REMOTE_ADDR']; // Ottieni l'indirizzo IP dell'utente
        $regione = $x->getRegionByIP($ip);
        // Connessione al database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->conn;

        // Prepara l'inserimento nella tabella 'utenti'
        $sql = "INSERT INTO utenti (email, orario, regione, ip) 
                VALUES ('$email', NOW(), '.$regione.', '$ip')";

        if (!$conn->query($sql) === TRUE) {
            echo "Errore nell'inserimento del record: " . $conn->error;
        }
        header("../index.php");
    } else {
        echo "Parametro 'email' mancante.";
        die();
    }
} else {
    echo "Metodo non consentito.";
    die();
}