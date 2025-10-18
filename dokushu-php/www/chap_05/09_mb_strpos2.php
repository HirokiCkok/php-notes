<?php
$str = 'にわにはにわにわとりがいる';
if (mb_strpos($str, 'にわ') !== false) {
  echo '文字列が見つかりました。';
}