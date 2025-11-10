<?php
function readFiles(string ...$files) {
  // 配列から順にファイルパスを取り出す
  foreach($files as $file) {
    // ジェネレーター readLines に処理を委ねる
    yield from readLines($file);
  }
}

function readLines(string $path) {
  $file = fopen($path, 'rb') or die('ファイルが見つかりません');
  // 行単位にテキストを取得
  while($line = fgets($file, 1024)) {
    yield $line;
  }
  fclose($file);
}

$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
// sample.dat / sample2.dat の内容を順に列挙
foreach(readFiles(__DIR__ . '/43s_sample.dat', __DIR__ . '/44s_sample2.dat') as $line) {
  echo $line. $br;
}