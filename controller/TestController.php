<?php
require_once "../app/Controller.php";
require_once "../model/Student.php";
class TestController extends Controller{

    public function show(){
        $student = new Student($this->pdo);
        $students = $student->getAll();
        var_dump($students);
       
        $this->view('test', ['name' => 'Smoke']);
}
             
}
/* 
         $students = $student->store([
        "name"=> "Uptown Girl",
        "surname"=>"choice",
        "age"=> "50"
       ]);
      
            $students =$student-get(2);
            var_dump($students)


      */