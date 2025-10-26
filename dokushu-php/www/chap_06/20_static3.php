<?php
function checkStatic(): void {
  static $x = 0;
  $x++;
  echo "unset前：{$x}, \n";
  unset($x);
  $x = 13;
  echo "unset後：{$x}, \n";
}

checkStatic();
checkStatic();