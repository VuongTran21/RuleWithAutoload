<?php
namespace Rules;

class RulePercentWithCap extends Rule
{
    private $employeeThreshold;
    private $employerThreshold;

    public function __construct($from_tw, $to_tw, $from_age, $to_age, $year, $employeePercent, $employerPercent, $employeeConstant, $employeeThreshold, $employerThreshold)
    {
        parent::__construct($from_tw, $to_tw, $from_age, $to_age, $year, $employeePercent, $employerPercent);
        $this->employeeThreshold = $employeeThreshold;
        $this->employerThreshold = $employerThreshold;
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
            'employee' => min($this->tw * $this->employeePercent, $this->employeeThreshold),
            'employer' => min($this->tw * $this->employerPercent, $this->employerThreshold),
        ];
    }
}
?>
