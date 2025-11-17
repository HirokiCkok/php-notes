<?php
$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";

$now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
echo $now->format('Y年m月d日 (D) g:i:s a'). $br;
echo $now->format('当月の日数：t日'). $br;
echo $now->format('L') ? '閏年です' : '閏年ではありません'. $br;
echo $now->format(DateTime::RSS). $br;