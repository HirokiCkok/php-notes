<?php
function myArraywalk(array $array, callable $func, string $br) : void {
  foreach  ($array as $key => $value) {
    $func($value, $key, $br);
  }
}

$result = 0;          // 結果を格納するためのグローバル変数
function total(float $value, int $key, string $br) : void {
  global $result;     // グローバル変数を定義
  $result += $value;  // 配列の値を$resultに加算
}

$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
$data = [100, 50, 10, 5];
myArraywalk($data, 'total', $br);
echo "合計値：{$result}";