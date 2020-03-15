<?php
    /*Comments
        A PHP array is a variable that stores more than one piece of related data in a single variable
    */
    //Code

    //Numeric array: $arr[n] = value;
    // $movie[0] = 'Infinity War';
    // $movie[1] = 'First Avenger';
    // $movie[2] = 'Winter Soldier';
    // $movie[3] = 'Endgame';
    $movie = array(
        0 => "Infinity War",
        1 => "First Avenger",
        2 => "Winter Soldier",
        3 => "Endgame",   
    );
    echo $movie[3];
    echo "\n";
    $movie[3] = 'Mad Max: Fury Road';
    echo $movie[3];

    //Associative arrays(use descriptive names for id keys), useful when retrieving data from db
    $abantu = array(
        "Kalisa" => "Umuhungu",
        "Kamaliza" => "Umukobwa",
        "Kamali" => "Umuhungu",
        "Kayirebwa" => "Umukobwa"
    );
    echo "\n";
    echo "Kamaliza ni " . $abantu["Kamaliza"];

    //Multi-dimensional arrays: arrays that  contain other nested arrays
    echo "\n";

    $ibiryo = array(
        "imbuto" => array("itunda", "indimu", "ipera"),
        "imboga" => array("dodo", "amashu", "intoryi"),
        "inyama" => array("inka", "inkoko", "ihene")
    );

    //print_r:prints human readable information of a variable
    print_r($ibiryo);
    echo $ibiryo["imbuto"][1];

    /**
     * Arrays operators:
     * + : union
     * == : comparison(true or false)
     * === : identical 
     * != : not equal
     * !== : not identical
     */


    //Array functions

    //count() function
    echo "\n";
    $abarimu = array("Mr. Mukwende", "Mrs. Jennifer", "Mr. Petero");
    echo count($abarimu);

    //is_array() function: returns 1 or 0
    echo "\n";
    echo is_array($abarimu);

    //sort(): sorts an array using a value and outputs a numeric array
    echo "\n";
    sort($abantu);
    print_r($abantu);

    //ksort(): sorts an array using a key
    echo "\n";
    $abantu_1 = array(
        "Kalisa" => "Umuhungu",
        "Kamaliza" => "Umukobwa",
        "Kamali" => "Umuhungu",
        "Kayirebwa" => "Umukobwa"
    );
    ksort($abantu_1);
    print_r($abantu_1);

    //asort():maintains index association
    $abantu_2 = array(
        "Kalisa" => "Umuhungu",
        "Kamaliza" => "Umukobwa",
        "Kamali" => "Umuhungu",
        "Kayirebwa" => "Umukobwa"
    ); 
    asort($abantu_2);
    print_r($abantu_2);
?>