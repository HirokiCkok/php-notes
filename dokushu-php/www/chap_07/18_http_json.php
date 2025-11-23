<?php
require __DIR__ . '/../vendor/autoload.php';

$cli = new GuzzleHttp\Client([
  'base_uri' => 'https://wings.msn.to/',
]);
$res = $cli->get('/tmp/books.json');
$obj = json_decode($res->getBody());
echo print_r($obj);