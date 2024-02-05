<?php
$barang = [
    ['nama' => 'Ban', 'diskon' => '10'],
    ['nama' => 'oli mesin'],
    ['nama' => 'kampas rem'],
    ['nama' => 'busi', 'diskon' => '9'],
    ['nama' => 'akumulator', 'diskon' => '7'],
];



    foreach ($barang as $item) {
        if (isset($item['diskon'])) {
            echo "<br>" . "Nama: " . $item['nama'] . ", Diskon: " . $item['diskon'] . "%";
        }
    }

?>
