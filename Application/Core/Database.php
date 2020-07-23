<?php

namespace Application\Core;

use \PDO;

class Database extends PDO{
    
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'google_books';

    private $pdo;

    public function __construct(){
        try{
            $this->pdo = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_user,$this->db_pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            die("Erro ao conectar");
        }
        
    }

    public function executeQuery($query,$array=null){
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($array);
        return $stmt;
    }
}

?>