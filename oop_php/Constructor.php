<?php

echo "<center><b>Belajar OOP PHP Constructor Method</b></center>";

//kita kasih nama class Bahan.
class Bahan{

    //ini adalah Property.
    public $pertama = "Tepung",
           $kedua = "Telur",
           $ketiga = "Air",
           $keempat = "Garam";

 //ini adalah Constructor
 public function __construct($pertama, $kedua, $ketiga, $keempat) {
    $this->pertama = $pertama;
    $this->kedua = $kedua;
    $this->ketiga = $ketiga;
    $this->keempat = $keempat;

 }


//ini adalah method.
public function ambil() {

    return "$this->pertama,$this->kedua,$this->ketiga,$this->keempat";

}

}

//kita kasih nama variabel objek $produk_jadi.
$produk_jadi = new Bahan("Tepung Terigu", "Telur Ayam", "Air Matang", "Garam Dapur");
echo "Bahan-Bahan: ".$produk_jadi->ambil()."<br>";
echo "<hr>";
$produk_ganti = new Bahan("Tepung Sagu", "Telur Bebek", "Air Sumur", "Garam Uyah");
echo "Bahan-bahan: ".$produk_ganti->ambil();

echo "<hr>";

//ini adalah contoh2
echo "Contoh 2 <br>";


//ini adalah class
 class Buku{

    //ini adalah property
  public $judul = "Bunga Taman",
         $hal = 20,
         $penerbit = "Erlangga";

         //ini Constructor Method
   public function __construct($judul, $hal, $penerbit) {
   
    $this->judul = $judul;
    $this->hal = $hal;
    $this->penerbit = $penerbit;


   }      

   //ini adalah Method
public function carry() {
    return "$this->judul, $this->hal, $this->penerbit";
}

}

//ini adalah Objeck
$jadi_buku = new Buku("Laskar Pelangi", "956", "Percetakan");
echo $jadi_buku->carry()."<br>";
echo "<hr>";
$buku_alien = new Buku("Buku Alien 51", "1000", "Unknowe");
echo $buku_alien->carry()."<br>";

echo "<hr>";
echo "Contoh 3 <br>";

class speda{
 
    public $merk = "United",
           $warna = "Merah";
            


public function __construct($merk,$warna) {
$this->merk = $merk;
$this->warna = $warna;


}

public function call() {

return "$this->merk,$this->warna";

}

}

$objek_speda = new speda("Pacific","Hitam & Biru");
echo $objek_speda->call();

echo "<hr>";
echo "Contoh 4 <br>";

class laptop{

    public $nama = "Thosiba",
           $pabrik = "Pt.Laptop Japan",
           $prosesor = "Intel 7";

           public function __construct($nama, $pabrik, $prosesor) {

            $this->nama = $nama;
            $this->pabrik = $pabrik;
            $this->prosesor = $prosesor;

           }

    public function can() {
        return "$this->nama,$this->pabrik,$this->prosesor";
    }       

}

$laptop = new laptop("Lenovo IdeaPad S145", "Pt.Lenovo Tech Jap", "Amd 9");
echo $laptop->can();
echo "<hr>";
$pc = new laptop("Rog","Pt.Asus inovation", "Intel 11");
echo $pc->can()."<br>";

echo "<hr>";


class Buku_cerita{
    public $nama,
           $penulis,
           $penerbit,
           $jumlah_hal;
           
   public function __construct($nama, $penulis, $penerbit, $jumlah_hal){
       $this->nama = $nama;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->jumlah_hal = $jumlah_hal;
   }

   public function ambil_cerita(){
       return "$this->nama, $this->penulis, $this->penerbit, $this->jumlah_hal";
   }        
}

$objek_buku = new Buku_cerita("Laskar Pendekar", "Adi Wijaya", "Buku Cerita Rakyat", 100);
echo $objek_buku->ambil_cerita();

echo "<hr>";



?>