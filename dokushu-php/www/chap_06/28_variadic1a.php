<?php
function total(float ...$args): float {
  if (count($args) === 0) {
    throw new \Exception('引数は1個以上指定してください');
  }
  $result = 0;
  foreach ($args as $arg) {
    $result += $arg;
  }
  return $result;
}

echo total(7, 3, 10), "\n";
echo total(11, -5, 4, 88), "\n";
echo total(), "\n";