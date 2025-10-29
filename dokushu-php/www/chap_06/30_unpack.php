<?php
function getTriangleArea(float $base, float $height): float {
  return $base * $height / 2;
}

 // echo getTriangleArea([10, 5]); // 結果：エラー 
echo getTriangleArea(...[10, 5]);