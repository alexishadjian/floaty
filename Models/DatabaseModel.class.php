<?php

namespace Models;

use config\ConfigDatabase;

class DatabaseModel extends ConfigDatabase {
    
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct() {
        
        $ConfigDB = new ConfigDatabase();

        $this->db_name = $ConfigDB->db_name_conf;
        $this->db_user = $ConfigDB->db_user_conf;
        $this->db_pass = $ConfigDB->db_pass_conf;
        $this->db_host = $ConfigDB->db_host_conf;
    }

    public function getPDO() {
        if ( $this->pdo === null ) {
            $dsn = "mysql:host=$this->db_host;dbname=$this->db_name;charset=UTF8";
            $pdo = new \PDO($dsn, $this->db_user, $this->db_pass);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
}