<?php
require_once '03_Person2.php';

$p1 = new Person();
$p1->lastName = '井上';
$p1->firstName = '尚弥';
$p1->age = 31;
echo $p1->age;
// PHP 8.2以降はクラスの外でプロパティを追加することは非推奨のため警告が出る

$p2 = new Person();
$p2->lastName = '中谷';
$p2->firstName = '潤人';
echo $p1->age;
echo $p2->age;