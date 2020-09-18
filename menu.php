<?php 

$data_menu=["Perkalian","Pembagian"];

$berhenti=true;

while($berhenti)
{
    // $nomor=1;
    foreach($data_menu as $data)
    {
        // echo $nomor.$data."\n";
        // $nomor++;
    }

    $pilih_menu=readline("Pili menu :");

    if($pilih_menu==1)
    {
        // Fitur Perkalian
        echo "Perkalian";
    }elseif($pilih_menu==2)
    {
        // Fitur Pembagian
        include "bagi.php";
    }else
    {
        echo "Anda tidak memilih menu";
    }

    $ulangi=readline("ulagi lagi");
    if($ulangi=="no")
    {
        $berhenti=false;
    }
}