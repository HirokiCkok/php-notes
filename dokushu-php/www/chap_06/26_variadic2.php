<?php
function replaceContents(string $path, string ...$args): string {
  // 指定されたパスからファイルを読み込み
  $data = file_get_contents(__DIR__.'/'.$path);
  // 可変長引数を順番に処理し、{0}、{1}、・・・と置き換え
  for ($i = 0; $i < count($args); $i++) {
    $data = str_replace('{'.($i).'}', $args[$i], $data);
  }
  return $data;
}

// 27_data.dat（リスト27）を読み込み&出力
echo replaceContents('27_data.dat', '井上尚弥', '2025年10月27日');