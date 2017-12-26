<?php

// database Connection variables
define('HOST', 'localhost'); // Database host name ex. localhost
define('USER', 'root'); // Database user. ex. root ( if your on local server)
define('PASSWORD', ''); // user password  (if password is not set for user then keep it empty )
define('DATABASE', 'candidate_info'); // Database Database name
//print_r(PDO::getAvailableDrivers());

    try {
        $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD);
        //echo "ok";
        return $db;
    } catch (PDOException $e) {
        return "Error!: " . $e->getMessage();
        die();
    }


?>