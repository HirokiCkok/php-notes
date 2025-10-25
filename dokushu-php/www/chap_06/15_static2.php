<?php
function checkStatic(): int {
  static $x = 0;
  return ++$x;
}

echo checkStatic(), "\n";
echo checkStatic(), "\n";
echo $x ?? null;