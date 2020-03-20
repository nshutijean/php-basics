<?php
    /**
     * A Loop is an Iterative Control Structure
     * For loops: for and for...each (loops thru a specified number of times)
     */

     //for loop
    
     for ($i=0; $i<10 ; $i++) { 
         # code...
        $product = $i * 10;
        echo "The product of 10 * $i is $product"."\n";
     }

     //for...each(used on arrays)
     echo "\n";
     $ibikoresho = array("amasahane", "intebe", "amasafuriya");
     foreach($ibikoresho as $igikoresho) {
         echo $igikoresho ."\n";
     }

     //looping thru an associative array(access keys are alphanumeric)
     echo "\n";
     $abantu = array(
        "Kalisa" => "umugabo",
        "Kamaliza" => "umugore",
        "Kamali" => "umugabo",
        "Kayirebwa" => "umugore"
    );

    foreach ($abantu as $key => $value) {
        //keys as names and values as genders
        echo "$key ni $value"."\n";
    }

    //while loop: They are used to execute a block of code repeatedly until the set condition gets satisfied
    //types: do...while and while

    //while
    echo "\n";
    $i = 0;
    while ($i < 5) {
        echo $i + 1 ."\n";
        $i++;
    }

    //do...while
    echo "\n";
    $a = 9;
    do {
        echo "$a is"."\n";
    } while ($a < 9);

    //do...while executes at least once even if the condition is false

?>