<?php
$str = 'WINGSプロジェクト';

echo mb_substr($str, 5, 2), '<br>';
echo mb_substr($str, 5), '<br>';
echo mb_substr($str, 5, -4), '<br>';
echo mb_substr($str, -6, 2), '<br>';