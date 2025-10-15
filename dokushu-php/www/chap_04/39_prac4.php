<?php
$language = 'Python';
switch ($language) {
  case 'Python' :
  case 'PHP' :
  case 'Ruby' :
    echo 'インタプリター言語';
    break;
  case 'C#' :
  case 'Java' :
    echo 'コンパイル言語';
    break;
}