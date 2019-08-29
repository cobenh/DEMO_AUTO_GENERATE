<?php
    function create_database($nameCompany){
        $host="localhost"; 

        $root="root"; 
        $root_password=""; 
        
        $user= $nameCompany;
        $pass='newpass';
        $db= $nameCompany; 
        
            try {
                $dbh = new PDO("mysql:host=$host", $root, $root_password);
        
                $dbh->exec("CREATE DATABASE `$db`;
                        CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                        GRANT ALL ON `$db`.* TO '$user'@'localhost';
                        FLUSH PRIVILEGES;") 
                or die(print_r($dbh->errorInfo(), true));
        
            } catch (PDOException $e) {
                die("DB ERROR: ". $e->getMessage());
            }
    }
 ?>   
