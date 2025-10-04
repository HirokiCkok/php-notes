<?php
// $message = 'こんにちは！';

echo $message ?? 'ノーコメント', '<br>';

// 非省略構文
echo isset($message) ? $message : 'ノーコメント', '<br>';