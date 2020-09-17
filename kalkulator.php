<?php 

$keluar=true;
while($keluar)
{
    
    echo  "Aplilasi Perhitungan !!! \n";

    
    $angka_pertama=readline("Masukkan Angka Pertama: ");
    $angka_kedua=readline("Masukkan Angka Kedua: ");

    if(is_numeric($angka_pertama)==false || is_numeric($angka_kedua)==false){
        echo "maaf nomor yang ada tuju sedang tidak aktif !! \n";
        continue;
    }

    echo "hasil dari $angka_pertama + $angka_kedua adalah :".($angka_pertama+$angka_kedua)."\n";

    $ulang=readline("ulangi lagi (yes/no):");

    if($ulang!=="yes" || $ulang=="no"){
        $keluar=false;
    }
}

?>