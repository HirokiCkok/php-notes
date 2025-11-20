<?php
$br = (PHP_SAPI === 'cli') ? "\n" : "<br />";
$space = (PHP_SAPI === 'cli') ? "\u{3000}" : "&nbsp;";
// カレンダをテキスト表示するcalendar関数（引数$yearは年、$monthは月）
function calendar(int $year, int $month, string $space) : void {
  // 1 ~ 31 までの間でループ処理
  for ($i = 1; $i < 32; $i++) {
    // 日付（$i）が該当の妥当な日である場合のみ表示
    if (checkdate($month, $i, $year)) { echo "{$i}{$space}"; }
  }
}
echo '2025年11月のカレンダ：'. $br;
calendar(2025, 11, $space);