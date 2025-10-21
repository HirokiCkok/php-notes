<?php
declare(strict_types=1);
function getTriangleArea(float $base, float $height): float {
  return $base * $height /2;
}

$area = getTriangleArea(8, 10);
# $area = getTriangleArea(8,'x');    // 結果：エラー
# $area = getTriangleArea(8, '10');  // 結果：40
echo "三角形の面積は{$area}です。";
