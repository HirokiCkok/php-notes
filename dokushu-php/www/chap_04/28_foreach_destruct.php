<?php
$books = [
  ['独習Python', 3000],
  ['独習Java', 2980],
  ['独習C#', 3600],
];
foreach($books as [$title, $price]) {
  echo "{$title} ({$price}円) <br />";
}