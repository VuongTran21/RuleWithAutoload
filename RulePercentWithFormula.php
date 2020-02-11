<?php
namespace Rules;

class RulePercentWithFormula extends Rule
{
    private $employeeConstant;

    public function __construct($from_tw, $to_tw, $from_age, $to_age, $year, $employeePercent, $employerPercent, $employeeConstant)
    {
        parent::__construct($from_tw, $to_tw, $from_age, $to_age, $year, $employeePercent, $employerPercent);
        $this->employeeConstant = $employeeConstant;
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
            'employee' => $this->employeeConstant * ($this->tw - 500),
            'employer' => $this->tw * $this->employerPercent,
        ];
    }
}
?>
