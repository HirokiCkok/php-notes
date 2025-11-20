<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>DirectoryIteratar クラス</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th>ファイル</th>
        <th>サイズ</th>
        <th>最終アクセス日</th>
        <th>最終更新日</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // カレントフォルダーをオープン
      $dir = new DirectoryIterator('./');
      // フォルダーの内容を順番に読み込み
      foreach($dir as $file) {
        // 読み込んだ要素がファイルである（サブフォルダーなどでない）場合のみ表示処理
        if ($file->isFile()) {
      ?>
        <tr>
          <td><?= $file->getFilename(); ?></td>
          <td><?= $file->getSize(); ?></td>
          <td><?= date('Y/m/d H:i:s', $file->getATime()); ?></td>
          <td><?= date('Y/m/d H:i:s', $file->getMTime()); ?></td>
        </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>
</body>
</html>