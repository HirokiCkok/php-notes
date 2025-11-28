<?php require_once __DIR__ . '/03_Encode.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>クエリ情報</title>
  </head>
  <body>
    <?= e($_GET['keyword']) ?>
  </body>
</html>