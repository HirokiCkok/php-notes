<?php
function getValue($map, $key) {
  if (array_key_exists($key, $map)) {
    return $map[$key];
  }
  return null;
}

