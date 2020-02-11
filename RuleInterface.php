<?php
namespace Rules;

interface RuleInterface
{
    public function isMatch();

    public function calculate();

    public function init($tw, $age, $year_input);
}
?>
