<?php
function increment(int $num): int {
  $num++;
  return $num;
}

$value = 10;
echo increment($value), "\n";
echo $value;