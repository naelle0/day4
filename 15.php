<?php
// $berat_badan = 44; 
// $tinggi_badan = 148; 
// $tinggi_badan_m = $tinggi_badan / 100;
// $imt = $berat_badan / ($tinggi_badan_m ** 2); 

// if ($imt < 16.5) {
//     echo "berat badan kurang.";
// } elseif ($imt >= 16.5 && $imt < 22.9) {
//     echo " berat badan normal.";
// } elseif ($imt >= 22.9 && $imt < 24.9) {
//     echo " berat badan lebih.";
// } else {
//     echo " obesitas.";
// }


function hitung_imt($bb, $tb){
    $tb_m = $tb / 100;
    $imt = $bb / ($tb_m ** 2);
    
    if ($imt < 16.5) {
    echo "berat badan kurang.";
} elseif ($imt >= 16.5 && $imt < 22.9) {
    echo " berat badan normal.";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    echo " berat badan lebih.";
} else {
    echo " obesitas.";

    return $imt;
}

}
echo hitung_imt(44, 148);
?>