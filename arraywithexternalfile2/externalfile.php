<?php

/*foreach ($tableau as $key=>$value) {
    print $key."|key0|".$value["key0"]."|".
          $key."|key1|".$value["key1"]."|".
          $key."|key2|".$value["key2"]."|".PHP_EOL;
   }*/

function affichage($tableau,$i){
            for ($i=0; $i<count($tableau); $i++){

                print "|key0|".str_pad($tableau[$i]["key0"], 10," " ,STR_PAD_BOTH); 
                print "|key1|".str_pad($tableau[$i]["key1"], 10," ",STR_PAD_BOTH); 
                print "|key2|".str_pad($tableau[$i]["key2"], 10," ",STR_PAD_BOTH)."|".PHP_EOL;
                
            }
        }

?>