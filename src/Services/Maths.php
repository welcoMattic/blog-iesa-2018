<?php

namespace App\Services;

class Maths
{
    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function add(float $a, float $b): float
    {
        return $this->calculator->add($a, $b);
    }
}
