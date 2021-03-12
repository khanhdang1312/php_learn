<?php
function countWord($str)
{
    $countResult = array();
    if (empty($str)) {
        echo "<p>value is null</p>";
    }
    $lowerStr = strtolower($str);
    $str = explode(" ", $lowerStr);

    foreach ($str as $item => $item_value){
        $count=0;
        foreach ($str as $value => $value_value){
            if ($value_value==$item_value){
                ++$count;
                $countResult[$str[$item]]="$count";
            }
        }
    }

    foreach ($countResult as $x=> $x_value) {
       echo "[$x]"." => ".$x_value."<br>";
    }
}

countWord("khanh test test khanh ah ah");

?>