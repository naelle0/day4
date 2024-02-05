<?php
$student = [

        [
            'nama' => 'ikhfan',
            'nilai' => [80, 78, 82, 78, 88],
        ],
        [
            'nama' => 'azka',
            'nilai' => [86, 70, 80, 85, 81],
        ],
        [
            'nama' => 'rhestu',
            'nilai' => [83, 91, 70, 73, 81],
        ],
        [
            'nama' => 'ghlib',
            'nilai' => [89, 85, 84, 86, 88],
        ],

];

foreach ($student as $nilai) {
    $name = $nilai['nama'];
    $nilai = $nilai['nilai'];

    $jumlah = array_sum($nilai) ."<br>" ;
    echo "Jumlah nilai untuk $name adalah: $jumlah";
}