<?php
$exp = '3E2';
echo match($exp) {
  300 => '値は300',
  '3E2' => '値は3E2'
};