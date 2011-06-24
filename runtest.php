<?php

require_once 'PHPUnit.php';
require_once 'LogTest.php';

$suite  = new PHPUnit_TestSuite("LogTest");
$result = PHPUnit::run($suite);

echo $result -> toString();
