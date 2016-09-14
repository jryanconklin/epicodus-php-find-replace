<?php

    class FindReplace
    {

        // function findAndReplace($user_string, $find, $replace)
        // {
        //     // $position = strpos($user_string, $find);
        //     $words = explode(" ", $user_string);
        //     // $user_string_characters = str_split($words);
        //     // $replace_characters = str_split($replace);
        //     $found = 0;
        //     if ($replace != "") {
        //         for ($i=0; $i < count($words); $i++) {
        //             if ($words[$i] == $find) {
        //                 $words[$i] = $replace;
        //                 $found += 1;
        //             }
        //         }
        //         if ($found > 0) {
        //             $words = implode(" ", $words);
        //             return $words;
        //         } else {
        //             return "Word Not Found";
        //         }
        //     }
        //     return $user_string;
        // }


        // function findAndReplace($user_string, $find, $replace)
        // {
        //     $output = str_ireplace($find, $replace, $user_string);
        //     return $output;
        // }

        // function findAndReplacePartial($user_string, $find, $replace)
        // {
        //     $j = strpos($user_string, $find);
        //     //$words = explode(" ", $user_string);
        //     $user_string_characters = str_split($user_string);
        //     $replace_characters = str_split($replace);
        //     for ($i=0, $j; $j < $j + strlen($replace); $i++, $j++) {
        //         $user_string_characters[$j] = $replace_characters[$i];
        //     }
        //     $words = implode("", $user_string_characters);
        //     return $words;
        // }

        function findAndReplace($user_string, $find, $replace)
        {
            $words = explode(" ", $user_string);
            $found = 0;
            if ($replace != "") {
                if (strpos($user_string, $find) === false) {
                    return "Word Not Found";
                } else {
                    $output = str_replace($find, $replace, $user_string);
                    return $output;
                }
            } else {
                return $user_string;
            }
        }
    }
?>
