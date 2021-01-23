<?php

$myArray = [1, 2, 3 , 4, 5];
$myAssoc = [
    "one" => 1,
    "two" => 0
];
$inArray = in_array(2, $myArray);

echo $inArray; // WE'LL SEE THE VALUE NOT THE INDEX OF THE "NEEDLE" 2 IN THE "HAYSTACK" $myArray

$keyExists = array_key_exists(0, $myArray); // THE FIRST PARAMENTER IS THE KEY AND THE SECOND IS THE ARRAY.

echo $keyExists;

// echo in_array("one", $myAssoc); // IT WONT DISPLAY ANY VALUE BECAUSE THATS NOT THE VALUE

echo in_array(1, $myAssoc); // IN THIS CASSE THERE'S A VALUE SET TO 1, SO THE RESULT IS TRUE

echo array_key_exists("one", $myAssoc); // IN THIS CASE KEY_EXISTS DEALS WITH THE THEYKEY OF THE ARRAY


print_r(array_slice($myArray, 1, 3));   // IT CREATES A BRAND NEW ARRAY, THAT IS NO LONGER RELATED WITH THE PARENT ARRAY.

$myVar = true;          
$empty = empty($myVar); /*  EMPTY WILL RETURN TRUE IF
                            THE VARIABLE IS ACTUALLY EMPTY AND FALSE IF THERE'S
                            SOMETHING THERE. 
                        */
/*  WILL DISPLAY TRUE FOR INTEGER 0, FLOAT 0.0,
    STRING 0, EMPTY STRING, EMPTY ARRAY, NULL AND NOT
    ASSIGN VARIABLES;
*/
/*  THAT'S SOMETHING TO PAY ATTENTION, BECAUSE,
    EMPTY WILL RETURN THAT INTEGERS, FLOATS AND
    STRINGS WITH 0 ARE TRUE, IN SOME CASES THAT CAN
    BE A PAIN IN THE ASS, SO RATHER USE
    ARRAY_KEY_EXIST FOR SUCH SITUATIONS
*/ 


$empty = empty($myAssoc["two"]);       
$isset = isset($myAssoc["two"]);

/*
    DID YOU NOTICE THAT BOTH RETURN TRUE? 
    BUT IF YOU TRY isset($myAssoc["three"])
    YOU GONNA GET ISSET FALSE, THAT'S BECAUSE
    KEY "three" DOESN'T EXIST.
    AND IF YOU SET "two" AS null, YOU'LL GET
    RETURN AS FALSE AS WELL EVEN "two" BEING
    SET, BECAUSE ISSET CHECKS IF NOT ONLY
    IF EXIST, BUT ALSO IF HAS BEEN ASSIGN 
    A VALUE 
*/

var_dump($empty, $isset);    

