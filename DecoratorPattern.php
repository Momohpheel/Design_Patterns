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
   
    abstract function addIngredient() : Food;
   abstract function contains() : Food;
}

class EggDecoration extends FoodDecorator{
    
    function addIngredient(): Food{
        return "Egg has been added";
    }
    function contains(Food $food): Food{
       echo $food->contains();
       echo addIngredient();
    }
}

class FishDecoration extends FoodDecorator{
    
    function addIngredient(): Food{
        return "Fish has been added";
    }
    function contains(Food $food): Food{
       echo $food->contains();
       echo addIngredient();
    }
}

$rice = new RiceBeans();

$add = new EggDecoration(new RiceBeans);
$add->contains();
?>