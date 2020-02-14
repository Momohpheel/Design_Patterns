<?php
//Builder Design Pattern
//Another Creation Pattern
//Builder pattern aims to “Separate the construction of a 
//complex object from its representation so that the same 
//construction process can create different representations.” 
// It is used to construct a complex object step by step and the final step will return the object

abstract class Meal {
    abstract function name();
}

abstract class Pack {
    abstract function name();
}

abstract class Drink {
    abstract function name();
}

abstract class MenuBuilder {
    abstract function addMeal(): Meal;
    abstract function addPack(): Pack;
    abstract function addDrink(): Drink;
    function menu(){
        $this->addMeal()->name() . " - " . $this->addPack()->name() . " - " . $this->addDrink()->name();
    }
}

class Rice extends Meal {
    function name() {
        echo "rice";
    }
}

class Beans extends Meal {
    function name() {
        echo "bean";
    }
}

class RiceBeans extends Meal {
    function name() {
        echo "Rice and bean";
    }
}

class PaperPack extends Pack {
    function name() {
        echo "Paper pack";
    }
}

class Water extends Drink {
    function name() {
        echo " pure water";
    }
}

class BasicMenuBuilder extends MenuBuilder {
    function addMeal():Meal {
        return new Rice();
    }

    function addPack():Pack {
        return new PaperPack();
    }

    function addDrink():Drink {
        return new Water();
    }

}

class StandardMenuBuilder extends MenuBuilder {
    function addMeal():Meal {
        return new RiceBeans();
    }

    function addPack():Pack {
        return new PaperPack();
    }

    function addDrink():Drink {
        return new Water();
    }
}

class Server {

    private $menuBuilder;

    function __construct(MenuBuilder $menuBuilder) {
        $this->menuBuilder = $menuBuilder;
    }

    function buildMenu() {
        $this->menuBuilder->addMeal();
        $this->menuBuilder->addPack();
        $this->menuBuilder->addDrink();
    }

    function getMenu() {
        return $this->menuBuilder;
    }
}

$st = new StandardMenuBuilder();
$sr = new Server($st);
$sr->buildMenu();
$menu = $sr->getMenu();

$menu->menu();


// abstract class Packer{
//     abstract function PaperBag();
//     abstract function Disposable();
//     abstract function Nylon();
// }
// abstract class Meal{
//     abstract function Rice();
//     abstract function Beans();
//     abstract function Yam();
//     abstract function Amala();
// }
// abstract class Liquid{
//     abstract function Water();
//     abstract function Pepsi();
//     abstract function Coke();
//     abstract function Juice();
// }

// class Pack extends Packer{
//     function PaperBag(){
//         return "Paper Bag";
//     }
//     function Disposable(){
//         return "Disposable";
//     }
//     function Nylon(){
//         return "Nylon";
//     }
// }

// class Food extends Meal{
//     function Rice(){
//         return "Rice";
//     }
//     function Beans(){
//         return "Beans";
//     }
//     function Yam(){
//         return "Yam";
//     }
//     function Amala(){
//         return "Amala";
//     }
    
// }

// class Drink extends Liquid{
//     function Water(){
//         return "Water";
//     }
//     function Pepsi(){
//         return "Pepsi";
//     }
//     function Coke(){
//         return "Coke";
//     }
//     function Juice(){
//         return "Juice";
//     }
    
// }

// abstract class Menu{
//     abstract function MenuOne();
//     abstract function MenuTwo();
//     abstract function MenuThree();
// }

// class MenuBuilder extends Menu{
//     function MenuOne(){
//         $pack = new Pack;
//         $food = new Food;
//         $drink = new Drink;

//         return $pack->Disposable().' '.$food->Beans().' '.$drink->Coke();

//     }
//     function MenuTwo(){
//         $pack = new Pack;
//         $food = new Food;
//         $drink = new Drink;
//         return $pack->PaperBag().' '.$food->Rice().' '.$drink->Juice();
//     }
//     function MenuThree(){
//         $pack = new Pack;
//         $food = new Food;
//         $drink = new Drink;

//         return $pack->Nylon().' '.$food->Yam().' '.$drink->Pepsi();

//     }
// }

// $menu = new MenuBuilder();
// echo "Titi gets: ";
// echo $menu->MenuThree();
?>