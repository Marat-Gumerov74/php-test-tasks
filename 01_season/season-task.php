<?php

$month = mt_rand(1, 12);
function getSeason($month): void
{
  switch ($month) {
    case ($month > 0 && $month < 3 || $month == 12):
      echo "зима";
      break;
    case ($month > 2 && $month < 6 ):
      echo "весна";
      break;
    case ($month > 5 && $month < 8):
      echo "лето";
      break;
    case ( $month > 7 && $month < 12):
      echo "осень";
      break;
  }
}

getSeason($month);