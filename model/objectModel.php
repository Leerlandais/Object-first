<?php

declare(strict_types = 1);

class PerformCalculationByInput

{
    public float $firstNum;
    public float $secondNum;

    public function addNumbers() : float
    {
        return $this->firstNum + $this->secondNum;
    }
    public function subtractNumbers() : float
    {
        return $this->firstNum - $this->secondNum;
    }
    public function multiplyNumbers() : float
    {
        return $this->firstNum * $this->secondNum;
    }
    public function divideNumbers() : float
    {
        return $this->firstNum / $this->secondNum;
    }
}