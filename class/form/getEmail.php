<?php
require "../Core.php";
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
    header("Location: ../../index.php?newSub=true#buy_hook");
}