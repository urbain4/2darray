<?php
       
       function affichage($tableau,$i){
            for ($i=0; $i<count($tableau); $i++){

                print "|Brand|".str_pad($tableau[$i]["Brand"], 10," " ,STR_PAD_BOTH); 
                print "|1stplate|".str_pad($tableau[$i]["1stplate"], 7," ",STR_PAD_BOTH); 
                print "|milescompt|".str_pad($tableau[$i]["milescompt"], 10," ",STR_PAD_BOTH).PHP_EOL;
                
            }
        }
?>