<?php
$dt1 = new DateTime('2025/11/18 18:18:54');
$dt2 = new DateTime('2025/12/24');
$interval = $dt1->diff($dt2, true);
echo $interval->format('%Y年%M月%d日 %H時間%I分%S秒');
