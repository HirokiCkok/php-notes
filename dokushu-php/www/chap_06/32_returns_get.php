<?php
require_once '31_returns.php';

$result = max_min(10, 2, -5, 3, 78);
echo print_r($result, true);

[$max, $min] = max_min(10, 2, -5, 3, 78);
echo "最大値：{$max}、最小値：{$min}";