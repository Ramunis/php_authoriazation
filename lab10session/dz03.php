<?php
$n = 11;
$i = 1;
$p = $n / 2;
for ($k = 1;$k <= $p;$k++) /*Цикл по номеру витка*/ {
    for ($j = $k - 1;$j < $n - $k + 1;$j++) {
        $A[$k - 1][$j] = $i++; /*Определение значений верхнего горизонтального столбца*/
    }
    for ($j = $k;$j < $n - $k + 1;$j++) {
        $A[$j][$n - $k] = $i++; /* --//-- По правому вертикальному столбцу*/
    }
    for ($j = $n - $k - 1;$j >= $k - 1;$j--) {
        $A[$n - $k][$j] = $i++; /* --//-- по нижнему горизонтальному столбцу*/
    }
    for ($j = $n - $k - 1;j >= $k;$j--) {
        $A[$j][$k - 1] = $i++; /* --//-- по левому вертикальному столбцу*/
    }
}
if ($n % 2 == 1) {
    $A[$p][$p] = $n * $n;
}

echo '<table>';
for ($i = 0;$i < $n;$i++) {
	echo '<tr>';
    for ($j = 0;$j < $n;$j++) {
        echo '<td>'.$A[$i][$j].'</td>';
        if ($j == $n - 1) {
            echo "<br>";
        }
    }
	echo '</tr>';
}
echo '</table>';
?>