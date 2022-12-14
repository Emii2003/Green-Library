<?php
    class Connection{
        public static function getConnection(){
            $connection = new PDO("mysql:host=localhost;
                                                dbname=greenlibrary",
                                                "root",
                                                "");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->exec("SET CHARACTER SET utf8");
            return $connection;
        }
    }
?>