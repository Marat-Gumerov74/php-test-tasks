<?php
function sum_of_arr($arr):int {
  $sum = 0;
  foreach ($arr as &$value) {
    $sum +=$value;
  }
  return $sum;
}
