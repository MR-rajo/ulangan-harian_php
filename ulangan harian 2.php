<?php

$nama = "Dimas Putra Agustav";
$no_wa = "081935679330";
$alamat = "Jl. Mangga Besar XII. GG M SAAT";
$tipekamar = "Deluxe";
$status = "Checkin";
$tipe_delux = 200000;
$tipe_premium = 400000;
$tipe_superior = 800000;
$nginap = 5;
$diskon = 0;
$diskon_deluxe = 0.5;
$diskon_superior = 0.65;
$diskon_premium = 0.75;
$totalharga = $tipe_delux * $nginap;

if($nginap > 4 && $tipekamar = $tipe_delux){
    $diskon = $tipe_delux * $nginap * $diskon_deluxe;
}else if($nginap > 4 && $tipekamar = $tipe_superior){
    $diskon = $tipes * $menginap * $diskon_superior;
}else if($nginap > 4 && $tipekamar = $tipe_premium){
    $diskon = $tipe_premium * $nginap * $diskon_premium;
}

if($nginap > 4 && $tipekamar = $tipe_delux){
    $total = $tipe_delux * $nginap * $diskon_deluxe;
}else if($nginap > 4 && $tipekamar = $tipe_superior){
    $total = $tipe_superior * $nginap * $diskon_superior;
}else if($nginap > 4 && $tipekamar = $tipe_premium){
    $total = $tipe_premium * $nginap * $diskon_premium;
}

if ($status == "Waiting"){
    echo "<span style='color: yellow;'> Waiting <br />";
}else if ($status == "Checkin"){
    echo "<span style='color: green;'> Checkin <br />";
}else if($status == "Checkout"){
    echo "<span style='color: red;'> Checkout <br/>";
}


echo "=== Program Reservasi Hotel Sederhana === <br />";
echo "Nama Pemesanan : $nama <br />";
echo "Nomor WhatsApp : $no_wa <br />";
echo "Alamat : $alamat <br />";
echo "Harga Per Malam : Rp".number_format($tipe_delux)." <br />";
echo "Tipe Kamar : Deluxe <br />";
echo "Lamanya Menginap : $nginap <br />";
echo "Diskon : $diskon <br />";
echo "Total Harga : Rp".number_format($totalharga)." <br />";
echo "Status : <br />";


?>