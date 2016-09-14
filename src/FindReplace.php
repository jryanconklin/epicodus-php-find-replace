<?php

    class FindReplace
    {

        function findAndReplace($user_string, $find, $replace)
        {

            $words = explode(" ", $user_string);
            //$matches = array();

            if ($replace != "") {
                for ($i=0; $i < count($words); $i++) {
                    if ($words[$i] == $find) {
                        $words[$i] = $replace;
                    }
                }
            }
            $words = implode(" ", $words);
            return $words;

        }
    }

?>
