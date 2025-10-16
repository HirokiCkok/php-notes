<?php
$language = 'Python';
echo match($language) {
  'Python', 'PHP', 'Ruby' => 'インタプリター言語',
  'C#', 'Java' => 'コンパイル言語'
};
