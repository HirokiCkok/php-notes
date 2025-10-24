<?php
$x = 10;

function checkScope(): int {
  $x = 0;
  return ++$x;
}

echo checkScope();
echo $x;