<?php
    /**
     * Control structures:a block of code that decides the execution path of a program depending on the value of the set condition.
     * Code execution can be grouped into:
     *  -Sequential: executing all the codes in the order they have been written.
     *  -Decision: Decision: making a choice given a number of options.
     */

     //if-else
     $fist_number = 7;
     $second_number = 21;
     if ($fist_number > $second_number) {
        echo "$fist_number is greater than $second_number";
     } else {
        echo "$second_number is greater than $fist_number";
     }

     //switch case:only executes a single block of code depending on the value of the condition
     echo "\n";
     $today = "wednesday";
     switch ($today) {
        case 'sunday':
            echo "go to church";
            break;
        case 'moday':
             echo "lundiose";
             break;
        case 'saturday':
             echo "wikendi";
             break;
        case 'wednesday':
            echo "watch a movie";
            break;
        default:
            echo "do what you want";
            break;
     }

     

?>