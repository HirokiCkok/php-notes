<?php
$x = 10;

function checkScope(): int {
  $x = 0;  // PHP8以降では未定義変数の初期化は廃止された
  return ++$x;
}

echo checkScope();
echo $x;