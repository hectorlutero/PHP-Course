<?php

file_put_contents('./text.log', "something cool!\nsomething cool in a new line!");

file_put_contents('./text.log', "\nMORE TEXT IN A NEW LINE!", FILE_APPEND);

define ('MY_CONST', 1); //THAT'S THE WAY TO DEFINE A CONST.


echo MY_CONST;