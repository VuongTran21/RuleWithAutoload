<?php
namespace Rules;

class RulePercentOnly extends Rule
{
    public function __construct($from_tw, $to_tw, $from_age, $to_age, $year, $employeePercent, $employerPercent)
    {
        parent::__construct($from_tw, $to_tw, $from_age, $to_age, $year, $employeePercent, $employerPercent);
    }

    public function isMatch()
    {
        return ($this->tw > $this->from_tw && $this->tw <= $this->to_tw) &&
            ($this->age > $this->from_age && $this->age <= $this->to_age) &&
            ($this->year === $this->year_input);
    }

    public function calculate()
    {
        return [
            'employee' => $this->tw * $this->employeePercent,
            'employer' => $this->tw * $this->employerPercent,
        ];
    }
}
?>
