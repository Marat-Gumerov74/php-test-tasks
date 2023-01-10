<?php
function print_piramid(): void
{
  for ($i = 1, $cycle = $i ; $i < 6; $i++, $cycle=$i){

    while ($cycle > 0) {
      $cycle--;
      echo  "$i";
    }
    echo "\n";
  };
};

print_piramid();
