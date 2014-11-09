<?php

namespace Sokil;

class CardNumberTest extends \PHPUnit_Framework_TestCase
{
    public function testGetControlDigit()
    {
        $cardNumber = new CardNumber;
        
        $this->assertEquals(8, $cardNumber->getControlDigit(402400714973776));
        $this->assertEquals(7, $cardNumber->getControlDigit(455643260509594));
        $this->assertEquals(5, $cardNumber->getControlDigit(455673758689985));
    }
    
    public function testValidate()
    {
        $cardNumber = new CardNumber;
        
        $this->assertTrue($cardNumber->isValid(4024007149737768));
        $this->assertTrue($cardNumber->isValid(4556432605095947));
        $this->assertTrue($cardNumber->isValid(4556737586899855));
    }
}