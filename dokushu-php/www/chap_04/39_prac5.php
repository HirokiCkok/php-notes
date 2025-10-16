<?php
$language = 'Python';
if ($language === 'Python' || $language === 'PHP' || $language === 'Ruby') {
  echo 'インタプリター言語';
} elseif ($language === 'C#' || $language === 'Java') {
  echo 'コンパイル言語';
}
