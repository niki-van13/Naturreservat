  
<?php

abstract class Animal {
public $name;

abstract function makeSound() ;

}

class Apa extends Animal {

    function __construct ($name) {
        $this -> name = $name;

    }

    public function makeSound() {
        echo "uauauuaua";
    }
}

class Giraff extends Animal {

    function __construct ($name) {
        $this -> name = $name;

    }

    public function makeSound() {
        echo "iiiiuiuu";
    }
}


class Tiger extends Animal {

    function __construct ($name) {
        $this -> name = $name;

    }

    public function makeSound() {
        echo "Gerrrr";
    }
}

class koko extends Animal {

    function __construct ($name) {
        $this -> name = $name;

    }

    public function makeSound() {
        echo "...";
    }
}

if($_SERVER["REQUEST_METHOD"]) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST['apa']) && isset($_POST['tiger']) && isset($_POST['giraff']) && isset($_POST['koko'])) {
        
            $Apa = $_POST['apa'];
            $Tiger = $_POST['tiger'];
            $Giraff = $_POST['giraff'];
            $koko = $_POST['koko'];

            
echo $Apa."";
echo $Giraff."";
echo $Tiger."";
echo $koko."";

} else {
    echo "niente ";
}



?>







