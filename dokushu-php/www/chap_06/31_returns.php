<?php
function max_min(float ...$args): array {
  // 最大値/最小値の順で配列を生成
  return [max($args), min($args)];
}