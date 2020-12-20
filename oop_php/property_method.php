<?php

echo "<center><b>Belajar OOP PHP Property & Method</b></center>";


//Contoh 1//
//kita kasih nama class Bahan.
class Bahan{

    //ini adalah Property.
    public $pertama = "Tepung",
           $kedua = "Telur",
           $ketiga = "Air",
           $keempat = "Garam";

//ini adalah method.
public function ambil() {

    return "$this->pertama,$this->kedua,$this->ketiga,$this->keempat";

}

}

//kita kasih nama variabel objek $produk_jadi.
$produk_jadi = new Bahan;
$nama1 = $produk_jadi->pertama;
$nama2 = $produk_jadi->kedua;
$nama3 = $produk_jadi->ketiga;
$nama4 = $produk_jadi->keempat;
$all = $produk_jadi;

echo "Bahan-Bahan: ".$produk_jadi->ambil()."<br>";
echo "<hr> atau <br>";
echo "-".$nama1."<br>";
echo "-".$nama2."<br>";
echo "-".$nama3."<br>";
echo "-".$nama4."<br>";

echo "<hr>";

//kita ubah isi property//
$var1 = $produk_jadi->pertama = "Tepung Terigu";
$var2 = $produk_jadi->kedua =  "Telur Ayam";
$var3 = $produk_jadi->ketiga = "Air Matang ";
$var4 = $produk_jadi->keempat = "Garam Dapur";
echo "Bahan-Bahan: <br>";
echo "-".$var1."<br>";
echo "-".$var2."<br>";
echo "-".$var3."<br>";
echo "-".$var4."<br>";

echo "<hr>";



//contoh 2//
echo "Contoh 2 <br>";

//ini adalah class
class car {

    //ini adalah property
public $merek = "Lamborgini",
       $warna = "Hitam",
       $produsen = "Toyota",
       $harga = 10000;

//ini adalah method
public function aksi() {

return "$this->merek, $this->warna, $this->produsen, $this->harga";

}       



}

//ini adalah object
$car = new car();

//kita ganti isi dari property2
$car1 = $car->merek = "Avanza";
$car2 = $car->warna = "Hitam";
$car3 = $car->produsen = "Toyota";
$car4 = $car->harga = 120000;


echo $car->aksi()."<br>";
echo "<hr>";
echo $car1;
echo $car2;
echo $car3;
echo $car4;

echo "<hr>";
echo "Contoh 3 <br>";

//ini adalah class
class motor{

    //ini adalah Property
    public $nama = "Beat",
           $warna = "Hitam",
           $pabrik = "honda";



 //ini  adalah  Method 
public function info() {

    return "$this->nama,$this->warna,$this->pabrik";
}

}

//ini adalah objek
$wingfo = new motor();
$let1 = $wingfo->nama = "Supra-X";
$let2 = $wingfo->warna = "Merah";
$let3 = $wingfo->pabrik = "Honda";

echo $wingfo->info();

echo "<hr>";

class Buku{
public $nama = "Laskar Wani",
       $Penulis = "Raden Wijaya Kusuma",
       $penerbit = "Buku Rakyat",
       $jumlah_hal = 233;


  public function ambil(){
      return "$this->nama,$this->Penulis,$this->penerbit,$this->jumlah_hal";
  }     
}

$objek_buku = new Buku();
$objek_buku->nama = "Laskar Pelangi";
echo $objek_buku->ambil()."<br>";

echo "<hr>";

//ini contoh 4
echo "Contoh 4 <br>";

class Namasaya{
    public $nama = "Faiz nurullah",
           $umur = 16,
           $tinggi = 170;


      public function cetaknamasaya(){

       return "Nama Saya: $this->nama,Umur Saya:  $this->umur Tahun, Dan Tinggi Badan Saya: $this->tinggi cm";

      }     
}

$objek_nama_saya = new Namasaya;
echo $objek_nama_saya->cetaknamasaya()."<br>";
$objek_nama_saya->nama="Fazrul Amin";
echo $objek_nama_saya->nama."<br>";

?>