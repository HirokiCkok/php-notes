<?php
function total(float $init, float ...$args): float {
  $result = $init;
  foreach ($args as $arg) {
    $result += $arg;
  }
  return $result;
}

echo total(7, 3, 10), "\n";
echo total(11, -5, 4, 88), "\n";
echo total(), "\n";