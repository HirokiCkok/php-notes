<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>アップロード処理</title>
  </head>
  <body>
    <!-- アップロード時はenctype属性に注意　-->
    <form method="POST" action="27_file2.php" enctype="multipart/form-data">
      <label for="upfile">ファイルのパス：</label>
      <input type="hidden" name="max_file_size" value="1000000" />
      <input id="upfile" type="file" name="upfile" size="40" />
      <input type="submit" value="アップロード" />
    </form>
  </body>
</html>