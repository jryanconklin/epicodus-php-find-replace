<?php
    require_once "src/FindReplace.php";
    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_findAndReturn_findAndReturn()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $input1 = "Hello World";
            $input2 = "World";
            $input3 = "";

            //Act
            $output = $test_FindReplace->findAndReplace($input1, $input2, $input3);

            //Assert
            $this->assertEquals("Hello World", $output);
        }

        function test_findAndReplace_findAndReplace()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $input1 = "Hello World";
            $input2 = "World";
            $input3 = "Universe";

            //Act
            $output = $test_FindReplace->findAndReplace($input1, $input2, $input3);

            //Assert
            $this->assertEquals("Hello Universe", $output);
        }




    }
?>
