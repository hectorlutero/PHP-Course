<?php

function snakeToCamel(string $text, bool $sedatedTheCamel = true) : ?string {
    
    $words = str_replace("_", " ", $text);
    $aloofCamel = str_replace(" ", "", ucwords($words));
    if ($sedatedTheCamel) {
        $sedatedTheCamel = lcfirst($aloofCamel);
        return $sedatedTheCamel;
    }

    return $sedatedTheCamel ? lcfirst($aloofCamel) : $aloofCamel;

}

echo snakeToCamel("my_snake_is_fat");