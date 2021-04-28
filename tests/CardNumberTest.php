<?php

namespace Sokil;

use PHPUnit\Framework\TestCase;

class CardNumberTest extends TestCase
{
    public function testGetControlDigit()
    {
        $cardNumber = new CardNumber;
        
        $this->assertEquals(8, $cardNumber->getControlDigit(402400714973776));
        $this->assertEquals(7, $cardNumber->getControlDigit(455643260509594));
        $this->assertEquals(5, $cardNumber->getControlDigit(455673758689985));
    }

    public function cardNumberDataProvider()
    {
        return [
            [4024007149737768],
            [4556432605095947],
            [4556737586899855],
        ];
    }

    /**
     * @dataProvider cardNumberDataProvider
     */
    public function testValidate(int $cardNumber)
    {
        $cardNumberValidator = new CardNumber;
        
        $this->assertTrue($cardNumberValidator->isValid($cardNumber));
    }
}