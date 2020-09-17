<?php


$keluar=true;

while($keluar)
{

    echo "aplikasi perhitungan !!!\n";

    $angka_pertama=readline("masukkan diameter lingkaran : ");
    

    if(!is_numeric($angka_pertama))
    {
        echo "maaf input hanya bisa angka !!!\n";
        continue;
    }

    echo "keliling lingkaran yang berdiameter $angka_pertama adalah : ".($angka_pertama*(22/7))."\n";

    // $ulangi=readline("masuk pilihan lain \n 1.pertambahan \n 2.pengurangan \n 3.perkalian \n 4.pembagian \n5.keliling lingkaran \t :");

    $ulangi=readline("ulangi lagi (yes/no) \t :");

    if($ulangi=="no"|| $ulangi!=="yes")
    {
        $keluar=false;
    }
}