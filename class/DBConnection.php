<?php

class DBConnection
{
    private $host = "argoroaog.mysql.db";
    private $username = "argoroaog";
    private $password = "aR8wr9aDaUL8VeXRzDX3";
    private $dbName = "argoroaog";

    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);

        if ($this->conn->connect_error) {
            die("Connessione al database fallita: " . $this->conn->connect_error);
        }
    }
}