<?php
namespace Rules;

class RuleProcessor
{
    private $rules = [];

    public function init()
    {
        $this->rules = [
             new RuleZero(50, 0, 0),

             new RulePercentOnly(50, 500, 0, 55, 1, 0, 4),
             new RulePercentOnly(50, 500, 0, 55, 2, 0, 9),
             new RulePercentOnly(50, 500, 0, 55, 3, 0, 17),

            new RulePercentOnly(50, 500, 55, 60, 1, 0, 4),
            new RulePercentOnly(50, 500, 55, 60, 2, 0, 6),
            new RulePercentOnly(50, 500, 55, 60, 3, 0, 13),

            new RulePercentOnly(50, 500, 60, 65, 1, 0, 3.5),
            new RulePercentOnly(50, 500, 60, 65, 2, 0, 3.5),
            new RulePercentOnly(50, 500, 60, 65, 3, 0, 9),

            new RulePercentOnlyGreaterThan(50, 500, 65, null, 1, 0, 3.5),
            new RulePercentOnlyGreaterThan(50, 500, 65, null, 2, 0, 3.5),
            new RulePercentOnlyGreaterThan(50, 500, 65, null, 3, 0, 7.5),
        ];
    }

    public function calculate($tw, $age, $year_input)
    {
        foreach ($this->rules as $rule) {
            $rule->init($tw, $age, $year_input);
            if ($rule->isMatch()) return $rule->calculate();
        }
    }
}
