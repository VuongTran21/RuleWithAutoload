<?php
namespace Rules;

class RuleZero extends Rule
{
    public function __construct($to_tw, $employeePercent, $employerPercent)
    {
        $this->to_tw = $to_tw;
        $this->employeePercent = $employeePercent;
        $this->employerPercent = $employerPercent;
    }

    public function isMatch()
    {
        return $this->tw <= $this->to_tw;
    }

    public function calculate()
    {
        return [
            'employee' => $this->employeePercent,
            'employer' => $this->employerPercent,
        ];
    }
}
