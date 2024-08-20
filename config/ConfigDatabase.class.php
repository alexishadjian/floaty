<?php

namespace config;

class ConfigDatabase {

    protected $db_name_conf;
    protected $db_user_conf;
    protected $db_pass_conf;
    protected $db_host_conf;

    public function __construct() {

        if ( $_SERVER['SERVER_NAME'] === 'floaty.local' ) {

            $this->db_name_conf = 'floaty';
            $this->db_user_conf = 'root';
            $this->db_pass_conf = 'root';
            $this->db_host_conf = 'localhost';

        } else {

            $this->db_name_conf = 'serv_name';
            $this->db_user_conf = 'serv_user';
            $this->db_pass_conf = 'serv_pass';
            $this->db_host_conf = 'serv_host';

        }
    }
}