<?php
for ($i = 1; $i < 10; $i++) {
  for ($j = 1; $j < 10; $j++) {
    $result = $i * $j;
    if ($result > 40) { break 2; }
    echo "{$result} &nbsp;";
  }
  echo '<br />';
}