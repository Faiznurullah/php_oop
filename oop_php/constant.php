<?php
echo "<center><b>Belajar OOP PHP Constructor Method</b></center>";
//constanta pada php terdiri dari 2 yaitu define() dan const
//Untuk const bisa di pakai di dalam class
//Sedangkan define() Tidak dapat di pakai di dalam class.

//menggunakan define('key','value')
 define('NAMA','Faiz Nurullah');
 echo NAMA."<br>";
define('UMUR','16');
echo UMUR."<br>";

echo "<hr>";

//ini contoh 2
const NAME = "Tatang Supratman";
echo NAME."<br>";
const AGE = "17";
echo AGE."<br>";

echo "<hr>";

//ini contoh 3
class coba{

 const produk = "Teh Gelas";
 const produk2 = "Coca-Cola";
 const produk3 = "Pop Mie";

}

echo coba::produk."<br>";
echo coba::produk2."<br>";
echo coba::produk3."<br>";

echo "<hr>";

//ini contoh 4

class baju{

   const Merk1 = "Three Second";
   const merk2 = "Dicoding";

}
$objek_baju = new baju;
echo baju::Merk1."<br>";
echo baju::Merk2."<br>";

echo "In Line ".__LINE__."<br>";
echo "In Folder ".__DIR__."<br>";

//magic constant untuk const
// __LINE__
// __FILE__
// __DIR__
// __CLASS__
// __FUNCTION__
// DLL.



?>