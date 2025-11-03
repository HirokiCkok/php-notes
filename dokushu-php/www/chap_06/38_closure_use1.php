<?php
function myArraywalk(array $array, callable $func, string $br) : void {
  foreach  ($array as $key => $value) {
    $func($value, $key, $br);
  }
}

$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
// 結果を求めるための関数
$data = [100, 50, 10, 5];
// 結果値を格納するための変数
$result = 0;
myArraywalk($data, function($value, $key, $br) use(&$result) {
  $result += $value;
  }, $br
);

echo "合計値：{$result}";