<?php


$array = [
    "0" => $myVal = true,
    "1" => $myVal = "null",
    "2" => $myVal = "notAssign",
    "3" => $myVal = "emptyString",
    "4" => $myVal = "zeroInt",
    "5" => $myVal = "zeroFloat",
    "6" => $myVal = "zeroString",
    "7" => $myVal = false,
    "8" => $myVal = "emptyArray"
];

foreach ($array as $myVal) {
    $string = "";
    switch ($myVal) {
        case 'true':
            $string = "true values";
            break;
        case "null":
            $string = "null values";
            $array[] = ["1" => $myVal = null];
            break;
        case "notAssign":
            $string = "not assign values";
            $array[] = ["2" => $myVal];
            break;
        case "emptyString":
            $string = "empty string values";
            $array[] = ["3" => $myVal = ""];
            break;
        case "zeroInt":
            $string = "zero integer values";
            $array[] = ["4" => $myVal = 0,];
            break;
        case "zeroFloat":
            $string = "zero float values";
            $array[] = ["5" => $myVal = 0.0,];
            break;
        case "zeroString":
            $string = "zero string values";
            $array[] = ["6" => $myVal = "0",];
            break;
        case false:
            $string = "false values";
            $array[] = ["7" => $myVal = false,];
            break;
        case "emptyArray":
            $string = "empty array values";
            $array[] = ["8" => $myVal = []];
            break;
        
        default:
            $string = "";
            break;
    }
    echo "For ".$string."<br>";
    echo "empty: "; var_dump(empty($myVal));
    echo "<br>isset: "; var_dump(isset($myVal));
    echo "<br><br>";
}

// $myVal = true; 

// echo "for true values"."<br>";


// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));

// echo "<br><br>";

// $myVal = null;
// echo "for null values"."<br>";

// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));

// echo "<br><br>";

// $myVal;

// echo "for not assign variables"."<br>";

// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));

// echo "<br><br>";

// $myVal = "";

// echo "for empty strings"."<br>";


// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));

// echo "<br><br>";

// $myVal = 0;

// echo "for 0 integer values"."<br>";

// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));

// echo "<br><br>";

// $myVal = 0.0;

// echo "for 0.0 float values"."<br>";

// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));

// echo "<br><br>";

// $myVal = "0";

// echo "for 0 string values"."<br>";

// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));

// echo "<br><br>";

// $myVal = false;

// echo "for false values"."<br>";

// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));

// echo "<br><br>";

// $myVal = [];

// echo "for for empty arrays"."<br>";

// echo "empty: "; var_dump(empty($myVal));
// echo "<br>isset: "; var_dump(isset($myVal));
// echo '<br>isset for $doesNotExist: ';var_dump(isset($doesNotExist));