<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>ポストデータ</title>
  </head>
  <?php require_once '03_Encode.php'; ?>
  <body>
    こんにちは、<?=e($_POST['name']) ?>さん！
  </body>
</html>