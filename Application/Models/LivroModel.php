<?php

namespace Application\Models;

use Application\Core\Database;

use \PDO;

class LivroModel
{
    
    public static function findAll(){
        $conn = new Database();
        $result = $conn->executeQuery('SELECT * FROM `livro` ORDER BY id DESC');
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id){
        $conn = new Database();
        $result = $conn->executeQuery('SELECT * FROM `livro` WHERE id = ?',array($id));
        return $result->fetch(PDO::FETCH_ASSOC);
    } 

    public static function insert($data){
        $conn = new Database();
        $result = $conn->executeQuery('INSERT INTO `livro` (titulo,descricao,imagem) VALUES (?,?,?)',array($data['titulo'],$data['descricao'],$data['imagem']));
        if($result)
            return true;
    }
    
    public static function delete($id){
        $conn = new Database();
        $result = $conn->executeQuery('DELETE FROM `livro` WHERE id = ?',array($id));
        if($result)
            return true;
    }


}


?>