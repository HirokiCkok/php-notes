<?php
$data = [1, 2, [31, 32, 33]];

[$a, $b, $c] = $data;
echo $a, '<br>';
echo $b, '<br>';
echo print_r($c, true), '<br>';

[$x, $y, [$z1, $z2, $z3]] = $data;
echo $x, '<br>';
echo $y, '<br>';
echo $z1, '<br>';
echo $z2, '<br>';
echo $z3;