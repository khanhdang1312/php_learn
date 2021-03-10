<?php
const arrInt = array(1, 2, 3, 4, 5, 7, 7, 88, 0, 4);
echo "items of array is :";
foreach (arrInt as $value) {
    echo $value;
}
echo "<br>";
echo "Max: " . max(arrInt);
echo "<br>";
echo "Min: " . min(arrInt);