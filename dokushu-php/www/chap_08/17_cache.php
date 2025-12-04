<?php
// ページの有効期限を過去の日付に設定
header('Expires: Sun, 15 Jan 1970 00:00:00 GMT');
// 最終更新日を常に更新
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT');
// キャッシュを無効に設定
header('Chache-Control: no-store, no-chache, must-revalidate');