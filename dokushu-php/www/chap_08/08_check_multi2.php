<?php require_once __DIR__ . '/03_Encode.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>チェックボックス</title>
  </head>
  <body>
    選択されたのは、<?= e(implode(',', $_POST['lang'])) ?>です。
  </body>
</html>