<?php

    require_once "src/NumberWord.php";

    class NumberWordTest extends PHPUnit_Framework_TestCase
    {

        function test_splitNumber()
        {
            //Arrange
            $test_NumberWord = new NumberWord;
            $input = "rock";

            //Act
            $result = $test_NumberWord->playGame($input1, $input1);

            //Assert
            $this->assertEquals("draw", $result1);
            $this->assertEquals("draw", $result2);
            $this->assertEquals("draw", $result3);
        }


    }

?>
