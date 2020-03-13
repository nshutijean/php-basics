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

    //Associative arrays
    
?>