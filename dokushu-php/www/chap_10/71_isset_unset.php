<?php
require_once '70_MyMailV2.php';

$m = new MyMailV2();
$m->From = 'admin@example.com';
var_dump($m->From);
var_dump(isset($m->From));
unset($m->From);
var_dump($m->From);