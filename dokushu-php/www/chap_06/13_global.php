<?php
$x = 10;

function checkScope(): int {
  global $x;
  return ++$x;
}

echo checkScope(), "\n";
echo $x;