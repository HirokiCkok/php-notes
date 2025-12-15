<?php
// アップロード処理そのものの成否をチェック
if ($_FILES['upfile']['error'] != UPLOAD_ERR_OK) {
  $msg = [
    UPLOAD_ERR_INI_SIZE => 'php.iniのupload_max_filesize制限を超えています。',
    UPLOAD_ERR_FORM_SIZE => 'HTMLのMAX_FILE_SIZE 制限を超えています。',
    UPLOAD_ERR_PARTIAL => 'ファイルが一部しかアップロードされていません。',
    UPLOAD_ERR_NO_FILE => 'ファイルはアップロードされませんでした。',
    UPLOAD_ERR_NO_TMP_DIR => '一時保存フォルダーが存在しません。',
    UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました。',
    UPLOAD_ERR_EXTENSION => '拡張モジュールによってアップロードが中断されました。'
  ];
  $err_msg = $msg[$_FILES['upfile']['error']];
// 拡張子が許可されたものであるかを判定
} elseif (!in_array(
  strtolower(pathinfo($_FILES['upfile']['name'])['extension']),
  ['gif', 'jpg', 'jpeg', 'png'])) {
  $err_msg = '画像以外のファイルはアップロードできません。';
// ファイルの内容が画像であるかをチェック
} elseif (!in_array(
  finfo_file(
    finfo_open(FILEINFO_MIME_TYPE),
    $_FILES['upfile'] ['tmp_name']
  ),
  ['image/gif', 'image/jpg', 'image/jpeg', 'image/png']
  )) {
  $err_msg = 'ファイルの内容が画像ではありません。';
// エラーチェックを終えたら、アップロード処理
} else {
  $src = $_FILES['upfile']['tmp_name'];
  $dest = $_FILES['upfile']['name'];
  if (!move_uploaded_file($src, 'doc/' .$dest)) {
    $err_msg = 'アップロード処理に失敗しました。';
  }
}
// エラー発生時はエラーメッセージを表示
if (isset($err_msg)) {
  die('<div style="color:Red;">'.$err_msg.'</div>');
}
// 処理成功時はフォームにリダイレクト
header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/26_file1.php');
