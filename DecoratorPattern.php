<?php

//Decorator Pattern (Structural Pattern)
//adds functionality to the object without tampering with the object

interface Food{
    function contains();
}

class RiceBeans implements Food{
    function contains(){
        return "Rice and Beans";
    }
}

class Amala implements Food{
    function contains(){
        return "Amala and Ewedu";
    }
}

class Yam implements Food{
    function contains(){
        return "Yam and Stew";
    }
}

abstract class FoodDecorator implements Food{
    public $mealdec;

    function MealDecorator(Food $mealdec): Food{
        $this->mealdec = $mealdec;
 
    }
    function contains(){
        $this->mealdec->contains();
    }
    abstract function fs();
}

class EggDecoration extends FoodDecorator{
    
    function fs(){}
    function EggDecorator(Food $mealdec): Food{
        parent::$mealdec;
 
    }
    function contains(){
        parent::$mealdec->contains();
        addEgg($mealdec);
    }
    function addEgg(){
        return "Egg has been added";
    }
}

class FishDecoration extends FoodDecorator{
    
    function fs(){}
    function EggDecorator(Food $mealdec): Food{
        parent::$mealdec;
 
    }
    function contains(){
       parent::$mealdec->contains();
        addEgg($mealdec);
    }
    function addFish(){
        return "Fish has been added";
    }
}

$rice = new RiceBeans();

$add = new EggDecoration(new RiceBeans);
$add->contains();
?>