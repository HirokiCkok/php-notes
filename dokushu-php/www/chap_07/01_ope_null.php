<?php
$dt = null;
echo $dt?->format('Y年m月d日 g:i:s') ;
// 結果：何も表示されない（$dtがnullでもエラーにはならない）