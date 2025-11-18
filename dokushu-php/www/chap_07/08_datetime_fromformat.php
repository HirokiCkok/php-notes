<?php
$fmt = 'Y年m月d日 H時i分s秒';
$time = '2025年11月17日 22時36分27秒';
$dt = DateTime::createFromFormat($fmt, $time);
echo $dt->format('Y-m-d H:i:s');