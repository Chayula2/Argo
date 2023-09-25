<?php

class DBConnection
{
    private $host = "nome_host";
    private $username = "nome_utente";
    private $password = "password";
    private $dbName = "nome_database";

    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);

        if ($this->conn->connect_error) {
            die("Connessione al database fallita: " . $this->conn->connect_error);
        }
    }
}