<?php
function getTriangleArea(float $base = 5, float $height = 1): float {
  return $base * $height / 2;
}

$area = getTriangleArea();
echo "三角形の面積は{$area}です。 \n";

$area = getTriangleArea(10);
echo "三角形の面積は{$area}です。 \n";

$area = getTriangleArea(10, 5);
echo "三角形の面積は{$area}です。 \n";