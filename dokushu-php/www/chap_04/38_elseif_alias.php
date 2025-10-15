<?php
$x = 35;
if ($x > 20) :
  echo '変数$xは20より大きいです。';
elseif ($x > 10) :
  echo '変数$xは10より大きく、20以下です。';
else :
  echo '変数$xは10以下です。';
endif;