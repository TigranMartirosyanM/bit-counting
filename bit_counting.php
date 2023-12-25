<?php

function countBits($n)
{
    $count = 0;
    preg_replace_callback("/[1]/i", function ($num) use (&$count) {
        $count++;
    }, decbin($n));
    return $count;
}
