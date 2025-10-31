<?php
// 高階関数 myArraywalk を定義
function myArraywalk(array $array, callable $func, string $br) : void {
  // 配列 $array の内容を順に処理
  foreach  ($array as $key => $value) {
    $func($value, $key, $br);  // $func で指定された関数を呼び出し
  }
}
// 配列を処理するためのユーザー定義関数
function showItem(mixed $value, int | string $key, string $br) : void {
  echo "{$key}：{$value}{$br}";
}

// 実行環境に応じて改行文字を設定
$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
$data = ['田中', '近岡', '大橋', '井上', '中谷'];
myArraywalk($data, 'showItem', $br);