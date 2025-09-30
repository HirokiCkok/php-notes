// PHP7.4までは出力されるが、PHP8以降は警告orエラーになる
<pre>
  <?php
  echo '108' + '15';
  echo '108' + '1.5XYZ';
  echo '108' + 'XYZ10';
  echo '108' + '1.5XYZ10';
  echo '108' + '1.5E1';
  echo '108' + '0b11';
  echo '108' + '010';
  echo '108' + '0x1A';