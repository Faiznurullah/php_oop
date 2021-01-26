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

 class saya{
     public $nama,
            $gender,
            $berat,
            $tinggi;

     public function __construct($nama, $gender, $berat, $tinggi){
    $this->nama = $nama;
    $this->gender = $gender;
    $this->berat = $berat;
    $this->tinggi = $tinggi; 
     }       


 }

 class cetaksaya{
     public function cetak_saya(saya $saya){
         $var_saya = "Nama Saya {$saya->nama} {$saya->gender} Berat Badan {$saya->berat} dan Tinggi Badan {$saya->tinggi}";
         return $var_saya;
     }
 }

 $objek_class_saya = new saya("Faiz Nurullah", "Laki-Laki", 65, 170);
 $objek_class_saya_repeat = new saya("Ridwan Kamil", "Laki_Laki", 60, 170 );
 $cetak_saya = new cetaksaya;
echo $cetak_saya->cetak_saya($objek_class_saya)."<br>";
echo $cetak_saya->cetak_saya($objek_class_saya_repeat);
echo "<hr>";

  class youtuber{
     public $pertama,
            $kedua,
            $ketiga,
            $keempat;

    public function __construct($dilan, $windah, $miaw, $limit){
        $this->pertama = $dilan;
        $this->kedua = $windah;
        $this->ketiga = $miaw;
        $this->keempat = $limit;
    }


  }

  class cetak_youtuber{

   public function cetak_you(youtuber $youtuber){
    $string_yt = "Pertama {$youtuber->pertama}, Kedua {$youtuber->kedua}, Ketiga {$youtuber->keempat}, Dan Keempat {$youtuber->keempat}";
    return $string_yt;
   }

  }

  $objek_youtuber_gaming = new youtuber("Dilan Pros", "Windah Basudara", "Miawaug", "Jes No Limit", "MR 05");
  $objek_youtuber_coding = new youtuber("WPU", "Sekolah Koding", "Onno Center", "Programmer Zaman Now", "BWA");
  $cetak_gaming = new cetak_youtuber;
  echo $cetak_gaming->cetak_you($objek_youtuber_gaming)."<br>";
  echo $cetak_gaming->cetak_you($objek_youtuber_coding);

?>