<?php

// Class adalah prototype, atau blueprint, atau rancangan yang mendefinisikan 
// variable dan method-methode pada seluruh objek tertentu. Class berfungsi untuk menampung isi 
// dari program yang akan di jalankan, di dalamnya berisi atribut / type data dan method 
// untuk menjalankan suatu program.


//Membuat Class
class aritmatika{

    //property
    var $sisi;
    var $panjang;
    var $lebar;
    var $alas;
    var $tinggi;
    var $hasil;
    
    // Method merupakan suatu operasi berupa fungsi-fungsi yang dapat dikerjakan 
    // oleh suatu object. Method didefinisikan pada class akan tetapi dipanggil melalui object.
    //method
    function Persegi($sisi){
        $hasil=$sisi*$sisi;
        return "Hasil Luas Persegi : ".$hasil."<br>";
    }
    
    function Persegipanjang($panjang,$lebar){
        $hasil=$panjang*$lebar;
        return "Hasil Luas Persegi Panjang : ".$hasil."<br>";
    }

    function Segitiga($alas,$tinggi){
        $hasil=($alas*$tinggi)* 0.5;
        return "Hasil Luas Segitiga : ".$hasil."<br>";
    }
    
}
?>