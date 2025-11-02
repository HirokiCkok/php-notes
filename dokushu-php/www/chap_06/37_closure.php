<?php
function myArraywalk(array $array, callable $func, string $br) : void {
  foreach  ($array as $key => $value) {
    $func($value, $key, $br);
  }
}

$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
$data = ['田中', '近岡', '大橋', '井上', '中谷'];
myArraywalk($data, 
  function($value, $key, $br) {
    echo "{$key}：{$value}{$br}";
  }, $br
);