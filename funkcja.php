<?php

function oceny($oceny) {
    if (empty($oceny)) {
        return 0;
    }
    $suma = array_sum($oceny);
    $ilosc = count($oceny);
    $srednia = $suma / $ilosc;
    return round($srednia, 2);
}
$oceny = [3.4, 5.3, 19];
echo oceny($oceny);
?>
