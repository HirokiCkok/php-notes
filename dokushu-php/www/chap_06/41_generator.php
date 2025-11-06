<?php
function myGen() {
  yield 'あいうえお';
  yield 'かきくけこ';
  yield 'さしすせそ';
}

$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
foreach(myGen() as $value) {
  echo $value. $br;
}