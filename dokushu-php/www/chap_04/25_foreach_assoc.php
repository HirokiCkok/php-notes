<?php
$data = ['田中' => '男', '近岡' => '男',
        '井澤' => '女', '大橋' => '男', '井上' => '女'];
foreach ($data as $key => $value) {
  echo "{$key}：{$value}<br />";
}