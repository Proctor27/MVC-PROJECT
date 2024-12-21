<?php

class Controller{
    public function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=mvc','root','' );               
 }
    protected $pdo;
    protected function view($filename ='', $data =[]){
        require_once '../view/'.$filename . '.php';
    }
    


}