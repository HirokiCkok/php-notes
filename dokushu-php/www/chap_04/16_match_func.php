<?php
function hoge() { return 10; }
function foo() { return 20; }
function bar() { return 30; }

$data = 10;
echo match($data) {
  hoge() => 'hogeがマッチ',
  foo() => 'fooがマッチ',
  bar() => 'barがマッチ',
};