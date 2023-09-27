<?php
require "../Core.php";
$x = new Core();

if (isset($_POST['emailSubscription'])) {
    $email = $_POST['emailSubscription'];
    $nome = $_POST['nameSubscription'];
    $messaggio = $_POST['textSubscription'];
    $ip = $_SERVER['REMOTE_ADDR']; // Ottieni l'indirizzo IP dell'utente
    $regione = $x->getRegionByIP($ip);
    // Connessione al database
    $dbConnection = new DBConnection();
    $conn = $dbConnection->conn;

    // Prepara l'inserimento nella tabella 'utenti'
    $sql = "INSERT INTO utenti (email, orario, regione, ip, messaggio, nome) 
            VALUES ('$email', NOW(), '.$regione.', '$ip', '$messaggio', '$nome')";

    if (!$conn->query($sql) === TRUE) {
        echo "Errore nell'inserimento del record: " . $conn->error;
    }
    header("Location: ../../index.php?newText=true#platform");
}