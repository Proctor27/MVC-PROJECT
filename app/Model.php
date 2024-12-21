<?php

class Model{
    private $pdo;
    protected $table ='';
    public function __construct(PDO $pdo) {
             $this->pdo = $pdo;
    }
public function getAll(){
    $stm = $this->pdo->query("SELECT * FROM $this->table");
    $models = $stm->fetchAll(PDO::FETCH_OBJ);
    return $models;
}

public function get($id){
    $stm = $this->pdo->prepare("SELECT * FROM $this->table WHERE id = ?");
    $stm->bindValue(1, $id);
    $stm->execute();
    $models = $stm->fetchAll(PDO::FETCH_OBJ);
    return $models;
}

public function store($data){
    
    $stm = $this->pdo->prepare("INSERT INTO $this->table (".implode(",", array_keys($data)).") VALUES(".implode(",", array_fill(0,count($data),"?")).")");
    $i=1;
    foreach($data as $key => $value){
        $stm->bindValue($i, $value);
        $i++;
    
}
$stm->execute();
}

public function update($id,$data){
}

public function delete($id){
}
}