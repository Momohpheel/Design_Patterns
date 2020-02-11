<?php
 include ("AbstractFactory.php");

 
$sound = new checkSound();
$fly = new itFly();
$name = new name();
$name->setName("Fowl");
echo$name->getName();
echo $fly->CanFly("Bird");
echo $fly->CantFly("Cow");
echo $sound->Bark("Dog");

abstract class Animal{
    abstract function setName(String $a);
    abstract function getName();
}
abstract class Fly{
    abstract function CanFly(String $a);
    abstract function CantFly(String $b);
}
abstract class Sound{
    abstract function Bark(String $a);
    abstract function Mooo(String $b);
    abstract function Meow(String $c);
    //abstract function NoSound(String $c);
}

class name extends Animal{
    public $name;
    public function setName(String $a){
        $this->name = $a;
    }
    public function getName(){
        return $this->name;
    }
}
// interface guh{
//     function hgu();
// }
// $sd = new guh();
// class fd{
//     function $sd sff(){
//         return 'dsas';
//     }
// }
class itFly extends Fly{
    public function CanFly(String $a){
        if ($a == "Bird"){
            return "Can Fly";
        }else{
            return "Can't Fly";
        }
    }
    public function CantFly(String $b){
        if ($b != "Bird"){
            return "Can't Fly";
        }
    }
}


class checkSound extends Sound{
    
    Public $name = "Philip";
    Protected $age = 43;
    Private $sex = "Male" ;
    static $role = "Intern";
    function Mooo(String $b){
        if ($a == "Cow"){
            return "Sound - Mooo";
        }
        else{
            return "Doesnt Mooo";
        }
    }
    function Meow(String $c){
        if ($c == "Cat"){
            return "Sound - Meow";
        }
        else{
            return "Doesnt Meow";
        }
    }
    
    function Bark(String $a){
        if ($a == "Dog"){
            return "Bark";
        }
        else{
            return "Doesnt Bark";
        }
    }


}
class Surname{
    final function name(){ 
        
        return "Momoh";

    }
}





?>