<?php
require_once '03_Person2.php';

$p1 = new Person();
$p1->lastName = '井上';
$p1->firstName = '尚弥';

$p2 = new Person();
$p2->lastName = '中谷';
$p2->firstName = '潤人';

echo "<p>ボクの名前は{$p1->lastName}{$p1->firstName}です。</p>";
echo "<p>ボクの名前は{$p2->lastName}{$p2->firstName}です。</p>";