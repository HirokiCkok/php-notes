<?php
$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";

$dt1 = new DateTime('now', new DateTimeZone('Asia/Ulan_Bator'));
echo $dt1->format('Y年m月d日 H時i分'). $br;

$dt2 = new DateTime('now', new DateTimeZone('America/Virgin'));
echo $dt2->format('Y年m月d日 H時i分'). $br;

$dt3 = new DateTime('now', new DateTimeZone('Europe/London'));
echo $dt3->format('Y年m月d日 H時i分'). $br;
