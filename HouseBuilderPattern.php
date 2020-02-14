<?php
abstract class Roof{
    abstract function type();
    abstract function price();
    abstract function color();
}
abstract class Door{
    abstract function type();
    abstract function price();
    abstract function color();
}
abstract class Window{
    abstract function type();
    abstract function price();
    abstract function color();
}
abstract class Paint{
    abstract function price();
    abstract function color();
}

class ironRoof extends Roof{
    function type(){
        return "Iron Roof";
    }
    function price(){
        return "$234.00";
    }
    function color(){
        return "Grey";
    }
}
class woodenRoof extends Roof{
    function type(){
        return "Wooden Roof";
    }
    function price(){
        return "$2224.00";
    }
    function color(){
        return "Brown";
    }
}

class woodenDoor extends Door{
    function type(){
        return "Wooden Door";
    }
    function price(){
        return "$1004.00";
    }
    function color(){
        return "Brown";
    }
}

class slidingDoor extends Door{
    function type(){
        return "Sliding Door";
    }
    function price(){
        return "$124.00";
    }
    function color(){
        return "Grey";
    }
}

class NormalDoor extends Door{
    function type(){
        return "Normal Door";
    }
    function price(){
        return "$22.00";
    }
    function color(){
        return "White";
    }
}

class Louvers extends Window{
    function type(){
        return "Louvers";
    }
    function price(){
        return "$524.00";
    }
    function color(){
        return "Glass";
    }
}

class SlidingWindow extends Window{
    function type(){
        return "Sliding Window";
    }
    function price(){
        return "$7224.00";
    }
    function color(){
        return "Glass";
    }
}

class RedPaint extends Paint{
    function price(){
        return "$100.00";
    }
    function color(){
        return "Red";
    }
}

class BluePaint extends Paint{
    function price(){
        return "$130.00";
    }
    function color(){
        return "Blue";
    }
}

class WhitePaint extends Paint{
    function price(){
        return "$230.00";
    }
    function color(){
        return "White";
    }
}

abstract class HouseBuilder{
    abstract function makeRoof() : Roof;
    abstract function addDoor(): Door;
    abstract function addWindows(): Window;
    abstract function addPaint(): Paint;
    function house(){
     return $this->makeRoof()->type() ." (".$this->makeRoof()->price(). ") - " . $this->addDoor()->type()." (".$this->addDooR()->price(). ")  - " . $this->addWindows()->type() . " - " . $this->addWindows()->price();
    }
}

class EpicPattern extends HouseBuilder{
    function makeRoof(): Roof{
        return new ironRoof();
    }
    function addDoor(): Door{
        return new NormalDoor();
    }
    function addWindows(): Window{
        return new Louvers();
    }
    function addPaint(): Paint{
        return new RedPaint();
    }
}


class EpicHouse extends HouseBuilder{
    function makeRoof(): Roof{
        return new ironRoof();
    }
    function addDoor(): Door{
        return new NormalDoor();
    }
    function addWindows(): Window{
        return new Louvers();
    }
    function addPaint(): Paint{
        return new RedPaint();
    }
}

class StandardHouse extends HouseBuilder{
    function makeRoof(): Roof{
        return new woodenRoof();
    }
    function addDoor(): Door{
        return new slidingDoor();
    }
    function addWindows(): Window{
        return new SlidingWindow();
    }
    function addPaint(): Paint{
        return new WhitePaint();
    }
}


class MidHouse extends HouseBuilder{
    function makeRoof(): Roof{
        return new woodenRoof();
    }
    function addDoor(): Door{
        return new woodenDoor();
    }
    function addWindows(): Window{
        return new SlidingWindow();
    }
    function addPaint(): Paint{
        return new WhitePaint();
    }
}

class Engineer{
    private $housebuilder;
    function __construct(HouseBuilder $housebuilder){
        $this->housebuilder = $housebuilder;
    }

    function buildHouse(){
        $this->housebuilder->makeRoof();
        $this->housebuilder->addDoor();
        $this->housebuilder->addWindows();
        $this->housebuilder->addPaint();
    }

    function getHouse(){
        return $this->housebuilder;
    }
}

$housebuild = new EpicPattern();
$eng = new Engineer($housebuild);

$eng->buildHouse();
$house = $eng->getHouse();

echo $house->house();

echo "\n\n";
$housebuild = new MidHouse();
$eng = new Engineer($housebuild);

$eng->buildHouse();
$house = $eng->getHouse();

echo $house->house();
?>