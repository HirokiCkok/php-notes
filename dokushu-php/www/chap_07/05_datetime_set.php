<?php
$now = new DateTime();
$now->setDate(2025, 11, 16);
$now->setTime(18, 36, 27);
echo $now->format('Y年m月d日 H:i:s');