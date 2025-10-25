<?php
function checkScope(): string {
  require_once '16_scope_included.php';
  return $scope;
}

echo checkScope(), "\n";
echo $scope ?? null;