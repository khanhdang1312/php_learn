<?php
$sum = 0;
$i = 0;
$oddSum = 0;
while ($i < 100) {
    $sum += $i;
    if ($i % 3 == 0 && $i >= 20 && $i <= 50) {
        $oddSum += $i;
    }
    $i++;
}
echo "Sum 1-100: " . $sum . "<br>";
echo "Odd Sum: " . $oddSum . "<br>";
?>