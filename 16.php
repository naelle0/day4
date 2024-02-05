<?php

function hari_hari($tanggal){
    $day = date('l', strtotime($tanggal));

    if ($day == 'Monday'){
        echo "Senin";
    }elseif($day == 'Tuesday'){
        echo "Selasa";
    }elseif($day == 'Wednesday'){
        echo "Rabu";
    }elseif($day == 'Thursday'){
        echo "Kamis";
    }elseif($day == 'Friday'){
        echo "Jum'at";
    }elseif($day == 'Saturday'){
        echo "sabtu";
    }else{
        echo "minggu";
    }
}
return hari_hari('2024-01-25');
?>