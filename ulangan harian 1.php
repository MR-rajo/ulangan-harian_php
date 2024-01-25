<?php 

function pesdik($nilai, $kon, $dua, $lima, $splh, $enam, $lapan, $smbln, $tgabls){
   for($nilai; $nilai <= $kon; $nilai++){
    if($nilai == $dua || $nilai == $lima || $nilai == $splh){
        echo "Peserta Didik no $nilai tidak hadir <br/>";
    } else if($nilai == $enam || $nilai == $lapan){
        echo "Peserta Didik no $nilai Terlambat <br/>";
    } else if($nilai == $smbln || $nilai == $tgabls){
        echo "Peserta Didik no $nilai Sakit <br/>";
    } else{
        echo "Peserta Didik no $nilai Hadir <br/>";
    }
   } 
}
echo pesdik(1, 15, 2, 3, 10, 6, 8, 9, 13);

?>