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

        function test_reverseArray()
        {
            //Arrange
            $test_NumberWord = new NumberWord;
            $splitNum = $test_NumberWord->splitNumber(12345);
            //Act
            $result = $test_NumberWord->reverseArray($splitNum);

            //Assert
            $this->assertEquals(array(5,4,3,2,1), $result);
        }

        function test_convertToWord_singleDigit()
        {
            //Arrange
            $test_NumberWord = new NumberWord;
            $input = 1;
            //Act
            $result = $test_NumberWord->convertToWord($input);

            //Assert
            $this->assertEquals("one", $result);
        }

        function test_convertToWord_twoDigitUnder20()
        {
            //Arrange
            $test_NumberWord = new NumberWord;
            $input = 13;
            //Act
            $result = $test_NumberWord->convertToWord($input);

            //Assert
            $this->assertEquals("thirteen", $result);
        }


    }

?>
