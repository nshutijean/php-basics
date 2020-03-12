<?php
// All variable names start with a "$" sign,
//     they are case sensitive
//     and do not require a space,
//     no minus or dollar sign to separate variable names
//types in php are done by the interpreter

    //integer
    $marks = 12;
    echo $marks;

    //float
    echo "\n";
    $weight = 65.7;
    echo $weight;

    //character string
    echo "\n";
    $my_name = "Jean Nshuti";
    echo $my_name;

    //explicit type casting
    echo "\n";
    $a = 1;
    $b = 3.5;
    $c = $a + $b; //ignored
    $c = $a + (int)$b; //casting done here
    echo $c;

    //using var_dump(): determining a variable's datatype
    echo "\n";
    $x = 3;
    var_dump($x);
    $y = 5.5;
    var_dump($y);
    $z = "Huh! Who knew that i'd be learning PHP";
    var_dump($z);

    //The value of constants cannot be changed at runtime

    //concatenation in php
    echo "\n";
    $cities = "Kigali"."\tButare";
    echo $cities;

    //concatenation using an assignment operator
    echo "\n";
    $name='John'.'.';
    $name.='Doe';
    echo $name;

    //comparison operators
    //==: equal
    //===(identical): compares both values and datatypes
    //!= or <>: not equal

    //logical operators
    // and or &&: logical AND
    //or or ||: logical OR
?>    
