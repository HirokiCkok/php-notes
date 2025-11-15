<?php
$now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
echo $now->format('Y年m月d日 H:i:s');