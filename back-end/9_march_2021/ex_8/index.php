<style>
    .text-blue {
        background-color: dodgerblue;
        color: white;
    }
</style>
<table border="1px">
    <?php
    for ($i = 2; $i < 100; $i++) {
        if ($i % 10 == 0) {
            echo "<tr></tr>";
        } else {
            for ($j = 2; $j * $j <= $i; $j++) {
                if ($i % $j == 0) {
                    echo "<td>$i</td>";
                    break;
                } else if ($j + 1 > sqrt($i)) {
                    echo "<td class='text-blue'>$i</td>";
                }
            }
        }
    }
    ?>
</table>

