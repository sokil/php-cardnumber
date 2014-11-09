<?php

namespace Sokil;

class CardNumber
{
    private function getMod($cardNumber)
    {
        $digitList = str_split($cardNumber);
        
        for($i = 0; $i < count($digitList); $i = $i + 2) {
            $digit = $digitList[$i] * 2;
            if($digit > 9) {
                $digit -= 9;
            }
            $digitList[$i] = $digit;
        }
        
        return array_sum($digitList) % 10;
    }
    
    public function getControlDigit($cardNumber)
    {
        return 10 - $this->getMod($cardNumber);
    }
    
    public function isValid($number)
    {
        return 0 === $this->getMod($number);
    }
}
