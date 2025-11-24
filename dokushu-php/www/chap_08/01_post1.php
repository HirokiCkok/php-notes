<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>ポストデータ</title>
  </head>
  <body>
    <!--action属性にはポストデータの送信先を指定-->
    <form method="POST" action="04_post2a.php">
      <label for="name">名前：</label>
      <input id="name" type="text" name="name" size="15" />
      <input type="submit" value="送信" />
    </form>
  </body>
</html>