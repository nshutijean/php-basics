<?php
    //importing necessary classes
    require 'Animal.php';
    require 'Cow.php';
    require 'Lion.php';

    //Creating objects from classes
    $cow = new Cow('herbivore', 'grass');
    $lion = new Lion('carnivore', 'meat');

    echo "Cow object:" . "\n";
    echo 'The cow belongs to the ' 
    . $cow->get_family() . ' family and eats '
    . $cow->get_food();

    echo "\n";
    echo "Lion object: " . "\n";
    echo 'The lion belongd to the '
    . $lion->get_family() . ' family and eats '
    . $lion->get_food();
?>
