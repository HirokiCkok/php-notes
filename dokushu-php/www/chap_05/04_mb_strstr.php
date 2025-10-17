<?php
$str = 'WINGSプロジェクト';
echo mb_strstr($str, 'S', true), '<br>';
echo mb_strstr($str, 'S'), '<br>';
echo mb_strstr($str, 'M', false), '<br>';