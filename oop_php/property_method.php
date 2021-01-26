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

//contoh 4
echo "Contoh 4 <br>";
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

//ini contoh 5
echo "Contoh 5<br>";

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

echo "<hr>";

//Contoh 6
echo "Contoh 6 <br>";

 class buah_apel{

 private $warna = "Merah",
           $rasa = "Enak",
           $jenis = "Apel Malang";

public function cetakapel(){
    return "$this->warna, $this->rasa, $this->jenis";
}

 }
 $objek_buah_apel = new buah_apel;
 echo $objek_buah_apel->cetakapel();
 echo "<hr>";

 //Contoh 7
 echo "Contoh 7 <br>";

  class buah_mangga{
   
 private $warna = "Orange",
         $rasa = "Manis & Masam",
         $jenis = "Mangga Indramayu";

public function cetakmangga(){
    return "$this->warna, $this->rasa, $this->jenis";
}

  }
  $objek_buah_mangga = new buah_mangga;
  echo $objek_buah_mangga->cetakmangga();

  echo "<hr>";

  //Contoh 8
  echo "Contoh 8 <br>";

  class buah_jeruk{
      private $warna = "Jingga",
              $rasa = "Masam",
              $jenis = "Jeruk Mandarin";

              public function cetakjeruk(){
                  return "$this->warna, $this->rasa, $this->jenis";
              }

  }
  $objek_buah_jeruk = new buah_jeruk;
  echo $objek_buah_jeruk->cetakjeruk();

  echo "<hr>";
  //Contoh 9
  echo "Contoh 9 <br>";

   class buah_naga{
       public $warna = "Hitam",
              $rasa = "Pahit",
              $jenis = "Buah Naga Asia";

           

              public function cetaknaga(){
                  return "$this->warna, $this->rasa, $this->jenis";
              }
   }

   $objek_buah_naga = new buah_naga;
   echo $objek_buah_naga->cetaknaga()."<br><br>";
   $objek_buah_naga->warna = "Merah Maroon";
   $objek_buah_naga->rasa = "Manis";
   $objek_buah_naga->jenis = "Buah Naga Afrika";
   echo $objek_buah_naga->warna."<br>";
   echo $objek_buah_naga->rasa."<br>";
   echo $objek_buah_naga->jenis."<br>";

   echo "<hr>";

   //Contoh 10
echo "Contoh 10 <br>";

 class laptop{
     private $merk = "Samsung Notepad 10+",
             $pabrik = "Samsung Inovation",
             $warna = "Hitam";

     public function cetaklaptop(){
         return "Laptop Merk:$this->merk, Pabrikan: $this->pabrik, Berwarna: $this->warna";
     }        
             
 }
 $objek_laptop = new laptop;
 echo $objek_laptop->cetaklaptop();

 echo "<hr>";

 //Contoh 11

 echo "Contoh 11 <br>";

 class carrier{
  public $nama = "Konsina",
         $liter = "60 Liter",
         $warna = "Merah";

  public function cetak_carrier(){
      return "Tas $this->nama itu memiliki ruang sekitar $this->liter dan berwarna $this->warna";
  }       

 } 

 $objek_carrier = new carrier;
 echo $objek_carrier->cetak_carrier()."<br>";
 $objek_carrier->nama = "Eiger";
 $objek_carrier->liter = "45 Liter";
 $objek_carrier->warna = "Biru";
 echo $objek_carrier->nama."<br>";
 echo $objek_carrier->liter."<br>"; 
 echo $objek_carrier->warna."<br>";  
  echo "<hr>";

  //Contoh 12
  echo "Contoh 12 <br>";

 class oppo{
     public $type = "A5 2020",
            $ram  = "3GB",
            $warna = "Putih";

     public function cetak_oppo(){
         return "OPPO $this->type, Memiliki Ram $this->ram, Dan Berwarna $this->warna";
     }       


 }

 $objek_oppo = new oppo();
 echo $objek_oppo->cetak_oppo();
  
?>