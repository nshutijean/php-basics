<?php
    /**
     * A string is a collection of characters.
     */

     //creating a single quote string
     var_dump('You are umb!');

     //escaping a single quote
     echo "\n";
     echo 'I \'ll be what i\'m gonna be';

     //double quotes
     echo "\n";
     $name = 'Rubuga';
     echo "$name is friends with Rurinda";

     //escaping a double quote
     echo "\n";
     $word = "word";
     $pwd = "pas\$word";
     $pwd_1 = "pass$word";
     echo $pwd;
     echo "\n";
     echo $pwd_1;

     //Heredoc:allows creating string values with more than one line without php string concatenation.
     //EOT(end of text): a string delimiter
     $baby_name = "Gahinja";
     echo "\n";
     echo <<<EOT
            When $baby_name was a baby,
            She used to eat "dirt".
        EOT;

     //Nowdoc: works like the way single quotes work. No parsing takes place inside the Nowdoc.
     echo "\n";
     $my_baby = <<<"EOT"
            When $baby_name was a baby,
            She used to eat "dirt".
        EOT;
     echo $my_baby;

     //Php string functions

     //strtolower
     echo "\n";
     echo strtolower('Bucyana');

     //strtoupper
     echo "\n";
     echo strtoupper('bucyana');

     //strlen
     echo "\n";
     echo strlen('Bucyana ni icyana');

    //explode: converts string into array
     echo "\n";
     $inyanja = explode(',', 
        "ibara=ubururu,
        ibirimo=amafi,
        ibiyigendaho=amato" 
    );
    print_r($inyanja);

    //substr: param1: the string, param2: the starting point, param3: number of characters to be returned
    $my_var = 'This is a long sentence';
    echo substr($my_var, 0, 12);

    //str_replace: param1: text to be replaced, param2: replacement text, param3: text that is analyzed
    echo str_replace('iyi', 'iriya', 'iyi hene irashaje');

    //strpos: locates and returns position
    echo strpos('iriya hene irashaje', 'hene');

    //sha1: calculates version 1 hash of a value
    echo sha1('secret');

    //md5: calculates the md5 hash of a string
    echo md5('secret');

    //str_word_count: counts number of words in a string
    echo str_word_count('Sakwe sakwe');

    //ucfirst: makes the first character of a string upper
    echo ucfirst('wassup');

    //lcfirst: makes the first character of a string lower
    echo lcfirst('WASSUP');

?>