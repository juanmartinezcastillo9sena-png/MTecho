<?php
class Database{
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pwd;

    public function __construct(){
    $env = parse_ini_file(__DIR__ ."../.env");
    $this->host=$env["DB_HOST"];
    $this->port=$env["DB_PORT"];
    $this->dbname=$env["DB_NAME"];
    $this->user=$env["DB_USER"];
    $this->pwd=$env["pwd"];
    }
    

    public function conectar(){
        return new PDO ("mysql:host={$this->host};port={$this->port};dbname={$this->dbname}","$this->user","$this->pwd");
    }
}

?>