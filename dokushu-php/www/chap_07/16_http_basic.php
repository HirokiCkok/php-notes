<?php
require __DIR__ . '/../vendor/autoload.php';

// クライアントを生成
$cli = new GuzzleHttp\Client([
  'base_uri' => 'https://wings.msn.to/',
]);
// リクエストを送信
$res = $cli->request('get', '/tmp/sample.txt');
// 取得したコンテンツを出力
echo $res->getBody();