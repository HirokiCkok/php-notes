<?php
// $iを1 ~ 3で変化させるループ
for ($i = 1; $i < 4; $i++) {
  $result = 0;
  switch ($i) {
    case 1 :
    case 3 :
      // $i = 1、3の場合のみ変数$resultを計算
      $result = $i * $i;
      break;
    case 2 :
      continue 2;
  }
  echo "{$i}の2乗は{$result}です。<br />";
}