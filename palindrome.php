<?php

function palindrome($input) {
    $mid = strlen($input) / 2;
    $half1st = substr($input, 0, floor($mid));
    $half2nd = substr($input, ceil($mid));
    return $half1st == strrev($half2nd);
}

echo palindrome("racecar") ? "Palindrome" : "Not a palindrome";