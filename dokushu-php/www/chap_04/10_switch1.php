<?php
$rank = '甲';
switch ($rank) {
  case '甲':
    echo '大変良いです。';
    break;
  case '乙':
    echo '良いです。';
    break;
  case '丙':
    echo 'もう少し頑張りましょう。';
    break;
  default :
    echo '？？？';
    break;
}