<?php
require "../Core.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$x = new Core();

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
    header("Location: ../../index.php");
}
header("Location: ../../index.php");