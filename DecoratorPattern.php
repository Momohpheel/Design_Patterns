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
  
    abstract function addIngredient();
   abstract function addcontains(Food $food) : Food;
   abstract function contains();
}

class EggDecoration extends FoodDecorator{
    
    function addIngredient(): Food{
        echo "Egg has been added";//there's an error here
    }
    function addcontains(Food $food): Food{
        echo $food->contains();
        return $this->addIngredient();
     }
    function contains(){}
    
}

class FishDecoration extends FoodDecorator{
    
    function addIngredient(){
        echo "Fish has been added";//there's an error here
    }
    function addcontains(Food $food): Food{
       echo $food->contains();
       return $this->addIngredient();
    }
    function contains(){}
}

$rice = new RiceBeans();

$add = new FishDecoration();
$add->addcontains(new RiceBeans);

?>