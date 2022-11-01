<?php

namespace Helper{


    class Input{
        
        static function input( $info )
        {
            echo "$info : ";
            $result = fgets(STDIN);
            return trim($result);
        }

    }


}