<?php
function checkStatic(): int {
  $x = 0;
  return ++$x;
}

echo checkStatic(), "\n";
echo checkStatic(), "\n";