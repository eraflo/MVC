<?php
namespace Core\Models;

use Core\Db;

abstract class Model extends Db {

    protected $table;
    protected $id;

    public function getOne(){
        $sql = "SELECT * FROM ".$this->PDObackquote($this->table)." WHERE id=:id";
        $query = $this->_connexion->prepare($sql);
        $query->bindValue(':id', $this->id);
        $query->execute();
        return $query->fetch();    
    }


    public function getAll(){
        $sql = "SELECT * FROM ".$this->PDObackquote($this->table).";";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();    
    }
}

?>