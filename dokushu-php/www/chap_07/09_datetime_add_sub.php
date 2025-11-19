<?php
$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";

$dt = new DateTime('2025/11/17 22:36:27');
echo $dt->format('Y年m月d日 H時i分'). $br;
$dt->add(new DateInterval('P1YT10H'));
echo $dt->format('Y年m月d日 H時i分'). $br;
$dt->sub(new DateInterval('P3MT20M'));
echo $dt->format('Y年m月d日 H時i分'). $br;