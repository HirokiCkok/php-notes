<?php
function total(float ...$args): float {
  // 結果を格納するための変数$result
  $result = 0;
  // 取得した引数を順に加算処理
  foreach ($args as $arg) {
    $result += $arg;
  }
  return $result;
}

echo total(7, 3, 10), "\n";
echo total(11, -5, 4, 88), "\n";