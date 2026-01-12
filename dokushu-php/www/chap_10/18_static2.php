<?php
require_once '17_Area2.php';

$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
echo '円周率：'.Area2::$pi. $br;
echo '円の面積：'.Area2::circle(10).'cm^2';