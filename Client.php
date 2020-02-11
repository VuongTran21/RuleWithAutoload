<?php
require __DIR__ . '/vendor/autoload.php';

$rule_processor = new \Rules\RuleProcessor();
$rule_processor->init();
echo "<pre>";
print_r($rule_processor->calculate(500, 66, 3));
