<?php

$a='wikrama';
 $b=substr($a,-2,1);
 echo "$b"; 
// $a=100;
// $b="alfa";
// $alfa=0.05;
// $sakit=0.03;
// $izin=0.03;
// $total = $b == "alfa" ? $a - $a * $alfa : ( $b == "sakit" || $b="izin" ? $a - $a * 0.03 : "tidak berkurang");
// echo "$total";

// $izinsakit='sakit';
// $presentase=100;
// $alfa=5;
// $hasil=$izinsakit ? $presentase -3 : ($alfa ? $presentase - 5 : $presentase);
// echo $hasil;





 // $hasil=$a > 90 ? "A" : ($a > 70 ? "B" : "c");
// echo "$hasil";


// $a=850000;
// $diskon= $a + $a*0.05;
// $diskon= $a > 500000 ? "andi mendapat $diskon": "tidak mendapat";
// echo "$diskon"; -->
// for($no=1;$no<=10;$no++){
//     echo "urutan ke: $no <br>"; 
// }

$a=1;

while($a <= 10){
    echo "$a<br>";
    $a++;
}

$a=10;

while($a >= 1){
    echo "$a<br>";
    $a--;
}




$a = 4;

for ($i = 1; $i <= 30; $i++) {
    $nilai_variabel = $a + $i;
    echo " $nilai_variabel<br>";
}

$b=0;
for($a = 5 ; $a <= 25;$a +=5){
    if(225 % $a == 0) {
        $a++;
        echo "bilangan 225 bisa dibagi abis oleh kelipatan 5 sebanyak $b kali";
    };
   
    

}

for($a = 1; $a <= 30; $a++){
    if($a % 4 == 0) {
        echo $a . "<br>";
    }
}



$a=1;
do{
    echo"urutan ke : $a <br>";
    $a++;
}while($a<=11);
$data = [

    [
        "nama" => "ikhfan",
        "rombel" =>'PPLG XI-1',
        "rayon" =>'ciawi 1',
        "jk"=>'L'
    ],
    
    [
        "nama" => "ikhfan",
        "rombel" => 'PPLG XI 2',
        "rayon" =>'ciawi 1',
        "jk"=>'L'
    ],
    [
        "nama" => "ikhfan",
        "rombel" => 'PPLG XI 3',
        "rayon" =>'ciawi 1',
        "jk"=>'L'
    ],
    [
        "nama" => "ikhfan",
        "rombel" => 'PPLG XI 4',
        "rayon" =>'ciawi 1',
        "jk"=>'L'
    ],

];
// foreach ($data as $key ) {
//     echo  "nama :".$key['nama']."<br>";
//     echo  "rombel :".$key['rombel']."<br>";
//     echo  "rayon :".$key['rayon']."<br>";
//     echo  "jenis_kelamin :".$key['jk']."<br><br>";
//     }

echo "<ol>";

foreach ($data as $key => $value) {
    echo "<li>" .$value['nama']. $value['rombel' ] . $value['rayon'] . $value['jk'] . "</li>";
}
echo "</ol>";



$bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$kompeten = array();
$belumKompeten = array();

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "Kelompok Kompeten: ";
foreach ($kompeten as $nilai) {
    echo $nilai . " ";
}

echo "<br>";

echo "Kelompok Belum Kompeten: ";
foreach ($belumKompeten as $nilai) {
    echo $nilai . " ";
}





for ($i = 1; $i <=3; $i++) {
    for ($j = 1; $j <=10; $j++) {
        echo "$i x $j = " . $i * $j . " | "; 
    }
    echo "<br>";
}


$databarang = [

    [
        "nama" => "pasta gigi",
        "harga1" =>'18000',
        "jumlah" =>'1',
    ],
    
    [
        "nama" => "sabun mandi",
        "harga2" =>'5000',
        "jumlah" =>'3',
    ],
    [
        "nama" => "aloe vera shet mask",
        "harga3" =>'15000',
        "jumlah" =>'5',
    ],
];
echo "<ol>";


    $totalHarga = 0;


foreach ($databarang as $barang) {
   
    $harga = 0;
    foreach ($barang as $key => $value) {
        if (strpos($key, 'harga') !== false) {
            $harga +=$value;
        }
    }

    $jumlah =  $barang['jumlah'];

   
    $totalHarga += $harga * $jumlah;
}


echo "Total Harga: " . $totalHarga . "<br>";







$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok_sama = [];
$kelompok_berbeda = [];

foreach ($bil1 as $bil) {
    if (in_array($bil, $bil2)) {
        $kelompok_sama[] = $bil;
    } else {
        $kelompok_berbeda[] = $bil;
    }
}

foreach ($bil2 as $bil) {
    if (!in_array($bil, $bil1)) {
        $kelompok_berbeda[] = $bil;
    }
}

echo "Kelompok yang terdapat di kedua variabel: " . implode(', ', $kelompok_sama) . "";
echo "Kelompok yang hanya terdapat di satu variabel saja: " . implode(', ', $kelompok_berbeda) . "<br>";




$data = [

    [
        "nama" => "alex",
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
        "nama" => "ikhfan",
        "tahun" => '2006',
       
    ],

];
echo "Orang yang lahir di tahun kabisat adalah: ";

foreach ($data as $item) {
    $tahun_lahir = intval($item["tahun"]);

    if ($tahun_lahir % 4 == 0 && ($tahun_lahir % 100 != 0 || $tahun_lahir % 400 == 0)) {
        echo $item["nama"] . " ";
    }
}


?>
