<?php

// Banner Aplikasi

//Daftar Menu

$data_menu=['perkalian','pembagian','penjumlahan'];

// Loop Aplikasi

$berhenti=true;

while($berhenti)
{

    // Menampilkan Nomor dan menu

    $nomor=1;
    foreach($data_menu as $menu)
    {
        echo $nomor.".".$menu."\n";
        $nomor++;
    }

    // User memilih daftar menu

    $pilih_menu=readline("Pilih menu :");

    // Hasil dari user memilih menu

    if($pilih_menu==1)
    {
        // Code perkalian masukkan sini
        
        // include "perkalian.php";

    }elseif($pilih_menu==2)
    {
        // Code perkalian masukkan sini
        echo "pembagian\n";
        
    }elseif($pilih_menu==3)
    {
        echo "Penjumlahan\n";

    }else{

        // Jika tidak memilih dengan benar program keluar

        echo "Anda tidak memilih menu dengan benar\n";
        break;
    }

    // Tanya user mau ulang lagi atau tidak

    $ulangi=readline("Ulangi Lagi ");

    if($ulangi=="no")
    {
        $berhenti=false;
    }

}