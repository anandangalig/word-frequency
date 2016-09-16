<?php
    require_once "src/repeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_no_match()
        {
            //Arrange
            $input1 = "apple";
            $input2 = "orange";
            $test_RepeatCounter = new RepeatCounter($input1, $input2);

            //Act
            $result = $test_RepeatCounter->countRepeats();
            $desired_result = 0;

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_one_word_match()
        {
            //Arrange
            $input1 = "apple";
            $input2 = "apple";
            $test_RepeatCounter = new RepeatCounter($input1, $input2);

            //Act
            $result = $test_RepeatCounter->countRepeats();
            $desired_result = 1;

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_two_word_string_match()
        {
            //Arrange
            $input1 = "apple";
            $input2 = "apple orange";
            $test_RepeatCounter = new RepeatCounter($input1, $input2);

            //Act
            $result = $test_RepeatCounter->countRepeats();
            $desired_result = 1;

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_full_sentence_match()
        {
            //Arrange
            $input1 = "apple";
            $input2 = "An apple a day keeps the doctor away";
            $test_RepeatCounter = new RepeatCounter($input1, $input2);

            //Act
            $result = $test_RepeatCounter->countRepeats();
            $desired_result = 1;

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_paragraph_match()
        {
            //Arrange
            $input1 = "apple";
            $input2 = "In taste an Apple is tasty and juicy, and has various tastes from sour to sweet. One can eat an apple raw, cooked, or baked, and it can be used in various dishes, such as apple sauce apple compote, apple pie, apple strudel, etc.";
            $test_RepeatCounter = new RepeatCounter($input1, $input2);

            //Act
            $result = $test_RepeatCounter->countRepeats();
            $desired_result = 6;

            //Assert
            $this->assertEquals($desired_result, $result);
        }

    }

 ?>
