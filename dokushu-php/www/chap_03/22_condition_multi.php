<?php
// 非推奨
// echo true ? 1 : false ? 'OK' : 'NG', '<br>';

// 推奨
echo (true ? 1 : false) ? 'OK' : 'NG', '<br>';
echo true ? 1 : (false ? 'OK' : 'NG'), '<br>';
