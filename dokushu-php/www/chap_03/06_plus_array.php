<pre>
  <?php
  $assoc1 = [
    'Apple' => 'Red',
    'Orange' => 'Yellow',
    'Melon' => 'Green'
  ];
  $assoc2 = [
    'Grape' => 'Purple',
    'Apple' => 'Green',
    'Strawberry' => 'Red'
  ];
  $result = $assoc1 + $assoc2;
  echo print_r($result, true);

  $ary1 = [1, 3, 5];
  $ary2 = [2, 3, 6];
  $result = $ary1 + $ary2;
  echo print_r($result, true);