<?php
require __DIR__ . '/../vendor/autoload.php';

$cli = new GuzzleHttp\Client([
  'base_uri' => 'https://wings.msn.to/',
]);
$res = $cli->post('/tmp/post.php', [
  'form_params' => [
    'name' => '井上尚弥'
  ]
]);
echo $res->getBody();