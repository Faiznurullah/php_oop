<?php

echo "<center><b>Belajar OOP PHP Objeck Type</b></center>";

//kita kasih nama class Bahan.
class Bahan{

    //ini adalah Property.
    public $pertama ,
           $kedua ,
           $ketiga ,
           $keempat ;

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

//Objek Type
class cetakinfo{

public function cetak(Bahan $bahan ) {

    $str = "{$bahan->pertama},{$bahan->kedua},{$bahan->ketiga}, {$bahan->keempat}";
    return $str;

}



}

//kita kasih nama variabel objek $produk_jadi.
$produk_jadi = new Bahan("Tepung Terigu", "Telur Ayam", "Air Matang", "Garam Dapur");
echo "Bahan-Bahan: ".$produk_jadi->ambil()."<br>";
echo "<hr>";
$produk_ganti = new Bahan("Tepung Sagu", "Telur Bebek", "Air Sumur", "Garam Uyah");
echo "Bahan-bahan: ".$produk_ganti->ambil();
echo "<hr>";

$info_bahan = new cetakinfo();
echo $info_bahan->cetak($produk_ganti);

echo "<hr>";



//contoh 2
echo "Contoh 2<br>";

class film{
    public $nama,
           $karya,
           $sutradara,
           $produsen;
        
public function __construct($nama, $karya, $sutradara, $produsen) {

$this->nama = $nama;
$this->karya = $karya;
$this->sutradara = $sutradara;
$this->produsen = $produsen;

}

public function jukut() {

return "$this->nama,$this->karya,$this->sutradara,$this->produsen";

}

}


class printinfo{

public function printt(film $film){

    $str2 = "{$film->nama},{$film->karya},{$film->sutradara},{$film->produsen}";
    return $str2;
}

}

$objekfilm = new film("Filosofi Kopi","Nico Alexander Arnold", "Jimmy Kidde", "Sinema Lawak");
$objekfilm->jukut();
$cetak_printt = new printinfo();
echo $cetak_printt->printt($objekfilm);

echo "<hr>";

//contoh 3
echo "Contoh 3 <br>";

class baju{
  public $brand,
         $ukuran,
         $warna;


public function __construct($brand, $ukuran,$warna){
    $this->brand = $brand;
    $this->ukuran = $ukuran;
    $this->warna = $warna;
}


   public function tok() {
return "$this->brand,$this->ukuran,$this->warna";
   }      


}

class tampilinfo{

public function tampil(baju $baju){

$str3 = "{$baju->brand},{$baju->ukuran},{$baju->warna}";
return $str3;

}



}



$objekbaju = new baju("Three Second", "Xl", "Hitam");

$tampil_info = new tampilinfo();
echo $tampil_info->tampil($objekbaju)."<br>";

echo "<hr>";

//contoh 4
echo "Contoh 4 <br>";

class buku{
public $judul,
       $penulis,
       $penerbit;

public function __construct($judul,$penulis,$penerbit){

$this->judul = $judul;
$this->penulis = $penulis;
$this->penerbit = $penerbit;


}    


 public function call_buku(){

 return "$this->judul, $this->penulis, $this->penerbit";

 }



}

class cetak_buku{
    
public function tampil_buku(buku $objek_buku){

 $str8= "{$objek_buku->judul},{$objek_buku->penulis},{$objek_buku->penerbit}";

 return $str8;
}

}

$objek_buku = new buku("Laskar Pedang", "Abi Kurniawan", "Buku Nasional");
$objek_call_buku = new cetak_buku();
echo $objek_call_buku->tampil_buku($objek_buku)."<br>";
echo $objek_buku->call_buku()."<br>";
echo "<hr>";
//Contoh 5
echo "Contoh 5 <br>";

class Saya{
    protected $nama = "Obby Makassh",
            $umur = 16,
            $tinggi = 170;

       public function __construct($nama, $umur, $tinggi){
  $this->nama = $nama;
  $this->umur = $umur;
  $this->tinggi = $tinggi;
       }     

       
}


class cetaksaya extends Saya{

    public function __construct(){

    }

    public function cetakwingfo(Saya $objek_saya){
        $stre = "Nama Saya:{$objek_saya->nama},Umur Saya:{$objek_saya->umur} Tahun ,Dan Tinggi Badan Saya:{$objek_saya->tinggi} cm";
     return $stre;
            }     
}

$objek_saya = new Saya("Faiz Nurullah", 16, 170);
$objek_cetak_saya = new cetaksaya();
echo $objek_cetak_saya->cetakwingfo($objek_saya);
?>