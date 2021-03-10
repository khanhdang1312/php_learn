<?php
$sum = 0;
$sumVase = 0;
$i = 0;
while ($i < 100) {
    $sum += $i;
    $sumVase += $i * $i;
    if ($i == 50) {
        break;
    }
    $i++;
}
echo "Sum: " . $sum . "<br>";
echo "Sum vase: " . $sumVase;