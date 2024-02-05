<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$sama = [];
$berbeda = [];

foreach ($bil1 as $bil) {
    if (in_array($bil, $bil2)) {
        $sama[] = $bil;
    } else {
        $berbeda[] = $bil;
    }
}

foreach ($bil2 as $bil) {
    if (!in_array($bil, $bil1)) {
        $berbeda[] = $bil;
    }
}

echo "Kelompok yang terdapat di kedua variabel: " . implode(', ', $sama) . "";
echo "Kelompok yang hanya terdapat di satu variabel saja: " . implode(', ', $berbeda) . "<br>";