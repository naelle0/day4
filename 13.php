<?php
$data = [

    [
        "nama" => "ikhfan",
        "tahun" =>'2008',
        
    ],
    
    [
        "nama" => "rhstu",
        "tahun" => '2001',
        
    ],
    [
        "nama" => "azka",
        "tahun" => '2004',
        
    ],
    [
        "nama" => "ghlb",
        "tahun" => '2006',
       
    ],

];
echo "Orang yang lahir di tahun kabisat adalah:  ";

foreach ($data as $item) {
    $tahun_lahir = intval($item["tahun"]);

    if ($tahun_lahir % 4 == 0 && ($tahun_lahir % 100 != 0 || $tahun_lahir % 400 == 0)) {
        echo $item["nama"] . " ";
    }
}


?>