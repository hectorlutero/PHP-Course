<?php

// for ($i=0; $i < 10; $i++) { 
    
//     if ($i === 5) {
//         continue;
//     }
//     var_dump($i);
//     echo "<br>";
// }

// for ($i=0; $i < 10; $i++) { 
    
//     for ($j=0; $j < 10; $j++) { 
        
//         if ($j === 5) {
//             continue;
//         }
//         var_dump($i . ' - ' . $j);
//         echo "<br>";  
//     }   
// }

// for ($i=0; $i < 10; $i++) { 
    
//     for ($j=0; $j < 10; $j++) { 
        
//         if ($j === 5) {
//             continue 2;
//         }
//         var_dump($i . ' - ' . $j);
//         echo "<br>";  
//     }   
// }

// for ($i=0; $i < 10; $i++) { 
    
//     for ($j=0; $j < 10; $j++) { 
        
//         if ($j === 5) {
//             break;
//         }
//         var_dump($i . ' - ' . $j);
//         echo "<br>";  
//     }   
// }

// for ($i=0; $i < 10; $i++) { 
    
//     for ($j=0; $j < 10; $j++) { 
        
//         if ($j === 5) {
//             break 2;
//         }
//         var_dump($i . ' - ' . $j);
//         echo "<br>";  
//     }   
// }

// for ($i=0; $i < 10; $i++) { 
    
//     for ($j=0; $j < 10; $j++) { 
        
//         if ($j === 5) {
//             $j++;
//         }
//         var_dump($i . ' - ' . $j);
//         echo "<br>";  
//     }   
// }

for ($i=0; $i < 10; $i++) { 
    
    for ($j=0; $j < 10; $j++) { 
        
        if ($j === 5) {
            $j += 2;
        }
        var_dump($i . ' - ' . $j);
        echo "<br>";  
    }   
}