<?php
function getTriangleArea(float $base = 5, float $height = 1): float {
  return $base * $height / 2;
}

$area = getTriangleArea();
echo "三角形の面積は{$area}です。 \n";

$area = getTriangleArea(height: 10);
echo "三角形の面積は{$area}です。 \n";

$area = getTriangleArea(height: 10, base: 50);
echo "三角形の面積は{$area}です。 \n";