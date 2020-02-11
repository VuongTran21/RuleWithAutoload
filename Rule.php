<?php
namespace Rules;

class Rule implements RuleInterface
{
    protected $from_tw;
    protected $to_tw;
    protected $tw;
    protected $from_age;
    protected $to_age;
    protected $age;
    protected $year;
    protected $year_input;
    protected $employeePercent;
    protected $employerPercent;

    public function __construct($from_tw, $to_tw, $from_age, $to_age, $year, $employeePercent, $employerPercent)
    {
        $this->from_tw = $from_tw;
        $this->to_tw = $to_tw;
        $this->from_age = $from_age;
        $this->to_age = $to_age;
        $this->year = $year;
        $this->employeePercent = $employeePercent;
        $this->employerPercent = $employerPercent;
    }

    public function init($tw, $age, $year_input)
    {
        $this->tw = $tw;
        $this->age = $age;
        $this->year_input = $year_input;
    }

    public function isMatch()
    {

    }

    public function calculate()
    {

    }
}
