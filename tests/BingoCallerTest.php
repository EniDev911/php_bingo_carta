<?php

use PHPUnit\Framework\TestCase;
use src\BingoCaller;

class BingoCallerTest extends TestCase
{
    public function testWhenCallsANumberItsInTheValidRange()
    {
    	$caller = new BingoCaller();

    	$number = $caller->callNumbers();

    	$this->assertTrue($number >= 1 && $number <= 75);
    }

    public function testWhenCalls75TimesAllNumbersArePresent()
    {
        $caller = new BingoCaller();
        $calledNumbers = [];
        $expectedNumbers = range(1, 75);

        for($i=0; $i<=75; ++$i){
            $calledNumbers[] = $number = $caller->callNumbers();
        }
        sort($calledNumbers);
        $this->assertEquals($expectedNumbers,$calledNumbers);
    }
}



