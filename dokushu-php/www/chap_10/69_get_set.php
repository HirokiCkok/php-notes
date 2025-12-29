<?php
require_once '68_MyMail.php';

$m = new MyMail();
// 必須のプロパティを設定
$m->to = 'inoue@example.com';
$m->subject = 'テストメール';
$m->message = 'こんにちは、MyMailクラスです。';
// 任意のプロパティを設定（ハイフンはすべてアンダースコアで指定すること）
$m->From = 'admin@example.com';  // 送信元
$m->X_Mailer = 'MyMail 1.0';     // 使用しているメーラー
$m->X_Priority = 1;              // 優先順位
$m->X_MSMail_Priority = 'High';  // 優先順位
// メールを送信
$m->send();