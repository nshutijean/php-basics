<?php
    /**
     * A function is a reusable piece or block of code that performs a specific action
     * Functions allow us to group blocks of related code that perform a specific task together.
     */

    /**
     * Built-in functions:
     * -String functions: they manipulate string data
     * 
     */
    
    //Numeric functions: used to format numbers, return constants, and perform mathematical computations

    //is_numberic()
    if(is_numeric("bare")) {
        echo "true";
    } else {
        echo "false";
    }

    //number_format(): formats a number using digit separators and decimal points
    echo "\n";
    echo number_format(3543534); 

    //rand(): generates a random number
    
    //round(num): rounds off a number with decimal points to the nearest whole number

    //sqrt(numb): returns the square root of a number

    //cos(num): return a cosine of an angle

    //sin(num): return a sinus of an angle

    //tan(num): return a tan of an angle

    //pi(): returns the value of PI

    //Date functions: used to format Unix date and time to human readable format


    /**
     * User defined functions:
     * Handy when: 
     *  -you have routine tasks in your application
     *  -performing validation check
     *  -authentication
     */
    echo "\n";
    //displays name
    function display_name($name) 
    {
        echo "Hello ".$name;
    }
    display_name("Rwigema");

    echo "\n";

    //kilometers to miles
    function kilometersToMiles($kilometers = 0) {
        $milesScale = 0.62;
        return $kilometers * $milesScale;
    }
    echo kilometersToMiles(50);

     
?>