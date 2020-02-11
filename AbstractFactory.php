<?php 
interface Head {
    function shape();
    function sound();
}

interface Body {
    function tail();
    function color();
}

interface Limb {
    function hindLimbs();
    function foreLimbs();
}

abstract class AbstractFactory {
    abstract function getHead();
    abstract function getBody();
    abstract function getLimb();
}

class AnimalFactory {
    private $animal;

    public function __construct($animal) {
        $this->animal = $animal;
    }

    function getFactory() {
        switch($this->animal) {
            case 'dog':
                $factory = new DogFactory();
            break;
            case 'bird':
                $factory = new BirdFactory();
            break;
        }
        return $factory;
    }
}



class DogFactory extends AbstractFactory {
    
    function getHead(){
        return new DogHead();
    }
    function getBody(){
        return new DogBody();
    }
    function getLimb() {
        return new DogLimb();
    }

}

class BirdFactory extends AbstractFactory {
    
    function getHead(){
        return new BirdHead();
    }
    function getBody(){
        return new BirdBody();
    }
    function getLimb() {
        return new BirdLimb();
    }

}

class DogHead implements Head {
    function shape(){
        echo "my head is triangular";
    }

    function sound() {
        echo "I bark";
    }
}

class BirdHead implements Head {
    function shape(){
        echo "my head is round";
    }

    function sound() {
        echo "I whirr";
    }
}

class DogBody implements Body {
    function tail() {
        echo "I have long tail";
    }
    function color() {
        echo "I am a brown";
    }
}

class BirdBody implements Body {
    function tail() {
        echo "I don't have a tail";
    }
    function color() {
        echo "I am black";
    }
}

class DogLimb implements Limb {
    function hindLimbs() {
        echo "I have long tail";
    }
    function foreLimbs() {
        echo "I am a brown";
    }
}

class BirdLimb implements Limb {
    function hindLimbs() {
        echo "I don't have a tail";
    }
    function foreLimbs() {
        echo "I am black";
    }
}


$Pfactory = new AnimalFactory('dog');
$factory = $Pfactory->getFactory();
$factory->getHead()->shape();

?>