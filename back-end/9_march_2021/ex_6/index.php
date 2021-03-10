<?php
$n = 50;
$myString = "";
for ($i = 1; $i <= $n; $i++) {
    $myString = $i . "-";
    if ($i == $n) {
        echo rtrim($myString, "-");
        break;
    }
    echo $myString;
}