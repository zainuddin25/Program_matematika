<?php

//reza
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
};
$keluar=true;


//huda
while($keluar)
{

   //banner aplikasi

   echo"APLIKASI PEMBAGIAN!!!\n";

   //terima input dari luar
    $angka_satu=readline("masukan angka pertama: ");
    $angka_dua=readline("masukan angka kedua: ");


   //validasi input angka pertama

   if(!preg_match("/^[0-9]*$/",$angka_satu) || (!preg_match("/^[0-9]*$/",$angka_dua)))
   {
      echo"maaf input hanya bisa angka !!!\n";
       continue;
   }
             //tampilkan hasil perhitungan

   echo "hasil dari $angka_satu / $angka_dua adalah : ".($angka_satu/$angka_dua)."\n";

           //cel logika user untuk mengulangi

   $ulangi=readline("ulangi lagi (yes/no): ");
   if($ulangi!=="yes" || $ulangi=="no"){
      $keluar=false;
   }
}


//ferdi
$keluar=true;

while($keluar){
    $angka_satu=readline("masukan angka pertama\t: ");
    $angka_dua=readline("masukan angka kedua\t: ");
    //validasi input angka pertama
    if(!preg_match("/^[0-9]*$/",$angka_satu) ||(!preg_match("/^[0-9]*$/",$angka_dua))){//jika $angka_satu bukan angka
        echo "maaf input hanya bisa angka !!!\n";
    continue;
    }

    echo "hasil dari $angka_satu * $angka_dua adalah: ".($angka_satu*$angka_dua)."\n";

    $ulangi=readline("ulangi lagi(yes/no): ");
    if($ulangi!=="yes" || $ulangi=="no" ){
        $keluar=false;
    }
}

// yosAFAT

$keluar=true;

while($keluar){
    $angka_satu=readline("masukan angka pertama\t: ");
    $angka_dua=readline("masukan angka kedua\t: ");
    //validasi input angka pertama
    if(!preg_match("/^[0-9]*$/",$angka_satu) ||(!preg_match("/^[0-9]*$/",$angka_dua))){//jika $angka_satu bukan angka
        echo "maaf input hanya bisa angka !!!\n";
    continue;
    }

    echo "hasil dari $angka_satu * $angka_dua adalah: ".($angka_satu*$angka_dua)."\n";

    $ulangi=readline("ulangi lagi(yes/no): ");
    if($ulangi!=="yes" || $ulangi=="no" ){
        $keluar=false;
    }
}

// Zainuddin

$keluar=true;

while($keluar){
    $angka_satu=readline("masukan angka pertama\t: ");
    $angka_dua=readline("masukan angka kedua\t: ");
    //validasi input angka pertama
    if(!preg_match("/^[0-9]*$/",$angka_satu) ||(!preg_match("/^[0-9]*$/",$angka_dua))){//jika $angka_satu bukan angka
        echo "maaf input hanya bisa angka !!!\n";
    continue;
    }

    echo "hasil dari $angka_satu + $angka_dua adalah: ".($angka_satu+$angka_dua)."\n";

    $ulangi=readline("ulangi lagi(yes/no): ");
    if($ulangi!=="yes" || $ulangi=="no" ){
        $keluar=false;
    }
}
?>