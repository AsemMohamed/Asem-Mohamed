<?php

    namespace App\Database\contract;

    class Connection
    {
        private  $db_server     = 'localhost';
        private  $db_username   = 'root';
        private  $db_password   = '';
        private  $db_name       = 'b22';
        public   $conn;
        public function __construct()
        {
            $this->conn = new \mysqli(
                $this   ->  db_server,
                $this   ->  db_username,
                $this   ->  db_password,
                $this   ->  db_name);
        }
    }
