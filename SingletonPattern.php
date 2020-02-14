<?php

//Singleton Pattern
//Instantiates the Object at the point of creating the class

class Single{
    //$obj = new Single();

    private function __construct(){}

    public function getObject(): Single{
        return new Single();
    }

    public function hello(){
        return "Hello there!";
    }


}

//$get = new Single()->getObject();

$instance = $get->hello();

echo $instance;






?>