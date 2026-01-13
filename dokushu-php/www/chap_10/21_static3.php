<?php
require_once '20_Area3.php';

$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
echo '円周率：'.Area3::PI. $br;
echo '円の面積：'.Area3::circle(10).'cm^2';