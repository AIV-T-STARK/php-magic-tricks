<?php

/* Insert Magic Code Here */

$array = [&$var, &$var, &$var];
// Giống như con trỏ, khi thay đổi 1 phần tử, thì tất các các phần thử khác đều thay đổi.

// NO CHANGES ALLOWED BELOW

var_dump(count($array), array_sum($array));

$array[0] = 1;
$array[1] = 2;
$array[2] = 3;

var_dump(count($array), array_sum($array));

/*
 * Magic output:
 *
 * int(3)
 * int(0)
 * int(3)
 * int(9)
 */
