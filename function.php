<?php

    //Membuat Function yang tidak mengembalikan nilai
    function menampilkan(): void{
        echo "Hello php, \n" ;
    }
    function pergi(){
        echo "Saya pamit \n";
    }
    //Menampilkan/Memanggil Function
    menampilkan();
    pergi();


    //Function yang mengembalilkan nilai
    function menjumlahkan($angka1, $angka2){
        $hasil = $angka1 + $angka2 ;
        return $hasil;
    }
    //Menampilkan/Memanggil 
    echo "1 + 2 = ";
    echo menjumlahkan(1,2);





         

































?>