<?php 
interface Roof{
    function type();
    function color();
}
interface Window{
    function type();
    function color();
}
interface Door{
    function type();
    function color();
}

class ModernHouseRoof implements Roof{
    function type(){
        echo "Wood";
    }
    function color(){
        echo "Black";
    }
}
class ModernHouseWindow implements Window{
    function type(){
        echo "Sliding";
    }
    function color(){
        echo "Brown";
    }
}
class ModernHouseDoor implements Door{
    function type(){
        echo "AI door";
    }
    function color(){
        echo "Transparent";
    }
}
class OlderHouseRoof implements Roof{
    function type(){
        echo "Iron";
    }
    function color(){
        echo "Silver";
    }
}
class OlderHouseWindow implements Window{
    function type(){
        echo "Louvers";
    }
    function color(){
        echo "Black";
    }
}
class OlderHouseDoor implements Door{
    function type(){
        echo "Push";
    }
    function color(){
        echo "Brown-Black";
    }   
}

abstract class HouseFactory{
    abstract function getRoof();
    abstract function getDoor();
    abstract function getWindow();
}

class ModernHouseFactory extends HouseFactory{
    function getRoof(){
        return new ModernHouseRoof();
    }
    function getDoor(){
        return new ModernHouseDoor();
    }
    function getWindow(){
        return new ModernHouseWindow();
    }
}

class OlderHouseFactory extends HouseFactory{
    function getRoof(){
        return new OlderHouseRoof();
    }
    function getDoor(){
        return new OlderHouseDoor();
    }
    function getWindow(){
        return new OlderHouseWindow();
    }
}

class HomeFactory{
    public $house;
    function __construct($house){
        $this->house = $house;
    }

    function getHouse(){
        if (($this->house) == "modern"){
            return new ModernHouseFactory();
        }
        else if (($this->house) == "olden"){
            return new OldenHouseFactory();
        }
    }
}


$house = new HomeFactory("modern");
$get = $house->getHouse();
echo "Roof Type and Color"."  ";
$get->getRoof()->type()." ".$get->getRoof()->color()."  ";
echo "Door Type and Color"."  ";
$get->getDoor()->type()." ".$get->getDoor()->color()."  ";
echo "Window Type and Color"."  ";
$get->getWindow()->type()." ".$get->getWindow()->color()."\n";
?>