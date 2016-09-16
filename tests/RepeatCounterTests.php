<?php
    require_once "src/repeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function no_match()
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

    }

 ?>
