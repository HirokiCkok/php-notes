<?php
$x = 10;

function checkScope(): int {
  global $x;
  unset($x);
  // unset($GLOBALS['x']); // global変数の破棄
  $x = 0;
  return ++$x;
}

echo checkScope(), "\n";
echo $x;