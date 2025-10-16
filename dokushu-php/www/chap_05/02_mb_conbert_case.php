<?php
$data1 = 'Wings project';
$data2 = 'WINGSプロジェクト';
$data3 = 'Fußball';

echo mb_convert_case($data1, MB_CASE_UPPER), '<br>';
echo mb_convert_case($data1, MB_CASE_LOWER), '<br>';
echo mb_convert_case($data1, MB_CASE_TITLE), '<br>';
echo mb_convert_case($data2, MB_CASE_LOWER), '<br>';
echo mb_convert_case($data3, MB_CASE_UPPER), '<br>';
echo mb_convert_case($data3, MB_CASE_UPPER_SIMPLE), '<br>';