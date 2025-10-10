<?php
$drink = 'ビール';
switch ($drink) {
  case '日本酒' :
  case 'ビール' :
  case 'ワイン' :
    echo '醸造酒です。';
    break;
  case 'ブランデー' :
  case 'ウイスキー' :
    echo '蒸留酒です。';
    break;
}