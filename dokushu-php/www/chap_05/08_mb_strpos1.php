<?php
$str = 'にわにはにわにわとりがいる';
echo mb_strpos($str, 'にわ'). '<br />';
echo mb_strpos($str, 'にわ', 2). '<br />';
echo mb_strpos($str, 'にわ', -10). '<br />';
echo mb_strpos($str, 'かに'). '<br />';
echo mb_strrpos($str, 'にわ'). '<br />';
echo mb_strrpos($str, 'にわ', -8). '<br />';