<?php

//Singleton Pattern
//Instantiates the Object at the point of creating the class

class Single{

    //public $r =  new Single();
    

    private function __construct(){}

    public function getObject(): Single{
        return new Single();
    }

    public function hello(){
        return "Hello there!";
    }

    
}

 

$instance = $get->hello();

echo $instance;






?>