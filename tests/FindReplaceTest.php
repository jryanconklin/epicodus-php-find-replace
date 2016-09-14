<?php
    require_once "src/FindReplace.php";
    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_findAndReplace_findAndReturn()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $user_string = "Hello World";
            $find = "World";
            $replace = "";

            //Act
            $output = $test_FindReplace->findAndReplace($user_string, $find, $replace);

            //Assert
            $this->assertEquals("Hello World", $output);
        }

        function test_findAndReplace_findAndReplace()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $user_string = "Hello World";
            $find = "World";
            $replace = "Universe";

            //Act
            $output = $test_FindReplace->findAndReplace($user_string, $find, $replace);

            //Assert
            $this->assertEquals("Hello Universe", $output);
        }

        function test_findAndReplace_wordNotFound()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $user_string = "Hello World";
            $find = "Dog";
            $replace = "Universe";

            //Act
            $output = $test_FindReplace->findAndReplace($user_string, $find, $replace);

            //Assert
            $this->assertEquals("Word Not Found", $output);
        }

        function test_findAndReplacePartial_findAndReplacePartialWords()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $user_string = "Hello World";
            $find = "Worl";
            $replace = "Lor";

            //Act
            $output = $test_FindReplace->findAndReplace($user_string, $find, $replace);

            //Assert
            $this->assertEquals("Hello Lord", $output);
        }


    }
?>
