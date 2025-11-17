<?php
$now = new DateTime();
$now->setTimestamp(time());
echo $now->format('Y年m月d日 H:i:s');