<?php

    require_once "src/NumberWord.php";

    class NumberWordTest extends PHPUnit_Framework_TestCase
    {

        function test_splitNumber()
        {
            //Arrange
            $test_NumberWord = new NumberWord;
            $input = 12345;

            //Act
            $result = $test_NumberWord->splitNumber($input);

            //Assert
            $this->assertEquals(array(1,2,3,4,5), $result);
        }


    }

?>
