<?php
$message = '';

// 省略構文
echo $message ?: '空です。', '<br>';

// 非省略構文
echo $message ? $message : '空です。', '<br>';
