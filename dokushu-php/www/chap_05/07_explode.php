<?php
$data = 'リオとニンザブロウとナミとリンリン';
echo print_r(explode('と', $data)). '<br />';
echo print_r(explode('や', $data)). '<br />';
echo print_r(explode('と', $data, 2)). '<br />';
echo print_r(explode('と', $data, -2)). '<br />';