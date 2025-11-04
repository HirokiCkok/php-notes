<?php
function myArraywalk(array $array, callable $func, string $br) : void {
  foreach  ($array as $key => $value) {
    $func($value, $key, $br);
  }
}

$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";

function hoge(string $br) {
  $data = [100, 50, 10, 5];
  $result = 0;

  // myArraywalk($data, function($value, $key, $br) {
  //   global $result;
  //   $result += $value;
  // }, $br);

  myArraywalk($data, function($value, $key, $br) use(&$result) {
    $result += $value;
  }, $br);

  echo "合計値：{$result}";
}

hoge($br);