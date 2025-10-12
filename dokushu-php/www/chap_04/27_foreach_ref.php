<?php
$data = ['田中', '近岡', '大橋', '井上', '中谷'];
foreach ($data as &$value) {
  $value = 'New' . $value;
}
print_r($data);