<?php
require_once '72_MyMailV3.php';

$m = new MyMailV3();
$m->From('admin@example.com');
echo $m->From();