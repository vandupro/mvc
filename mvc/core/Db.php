<?php
class Db {
    public $con;
    protected $servername = 'localhost:3307';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'mvc1';

    function __construct()
    {
        $this->con = new PDO("mysql:host=$this->servername; dbname=$this->dbname; charset=utf8", $this->username, $this->password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}

?>