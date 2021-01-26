<?php

// Jualan Produk
// komik
// Game

//property



class Produk {

 public $judul = "Judul",
        $penulis = "Penulis",
        $penerbit = "Penerbit",
        $harga = "Gratis";
 

public function penjelasan() {

return("Komik Nya Bagus Sekali");

}

public function ambil() {
    return "$this->judul, $this->penulis";
}



}

/*$produk_1 = new Produk();
$produk_1->judul = "Naruto";
echo var_dump($produk_1)."<br>";

echo "<hr>";

$produk_2 = new Produk();
$produk_2->judul= "One Piece";
$produk_2->TambahProperti = "Tambah Properti";
echo var_dump($produk_2);

*/

$produk_jadi = new Produk();
$produk_jadi->judul = "Sinchan";
$produk_jadi->penulis= "Orang Jepang";
$produk_jadi->penerbit= "Dari Jepang";
$produk_jadi->harga= 50000;

echo "Penulis & Penerbit: ".$produk_jadi->penulis."&nbsp; & &nbsp;".$produk_jadi->penerbit."<br>";
echo $produk_jadi->penjelasan()."<br>";
echo $produk_jadi->ambil()."<br>";

echo "<hr>";

$produk_gagal = new Produk();
$produk_gagal->judul = "Gta San Andreas";
$produk_gagal->penulis = "Rock Star";

echo "Komik: ".$produk_jadi->judul."&nbsp;".$produk_jadi->penulis."<br>";
echo "Game: ".$produk_gagal->judul."&nbsp;".$produk_gagal->penulis."<br>";
echo "Atau<br>";
echo $produk_jadi->ambil()."<br>";
echo $produk_gagal->ambil()."<br>";;

//aritmetika dengan konsep oop
class oprasi{

    public function penjumlahan(){

  $a = 4;
  $b = 5;
  $c = $a + $b;
  return "$a + $b = $c";

    }

    public function pengurangan(){
        $d = 100;
        $e = 25;
        $f = $d - $e;
        return "$d - $e = $f";

    }

    public function pembagian(){
        $g = 30;
        $h = 15;
        $i = $g / $h;
        return "$g : $h = $i";

    }

    public function perkalian(){
        $j = 75;
        $k = 5;
        $l = $j * $k;
        return "$j x $k = $l";

    }

}

$objek_penjumlahan = new oprasi;
echo $objek_penjumlahan->penjumlahan()."<br>";
echo $objek_penjumlahan->pengurangan()."<br>";
echo $objek_penjumlahan->pembagian()."<br>";
echo $objek_penjumlahan->perkalian()."<br>";
echo "<hr>";


//kondisi dengan konsep oop
 class kondisi{
     private $angka = 1,
             $angka2 = 7;

public function kondisi1(){

    if($this->angka > $this->angka2){
        echo "Angka 1 Lebih Besar Dari Pada Angka 2";
    }elseif($this->angka < $this->angka2){
        echo "Angka 1 Lebih Kecil Dari Pada Angka 2";
    }else{
        echo "Waduh Ada Kesalahan Nilai Variabel";
    }

}


public $nama= "Faiz";

public function kondisi2(){

    if($this->nama == "Faiz"){
        return "Oh,Ternyata Kamu $this->nama";
    }elseif($this->nama !== "Faiz"){
        return "Siapa Lu ?";
    }else{
        return "Waduh Ada Kesalahan Variabel";
    }

}

 }

 $objek_kondisi = new kondisi;
 echo $objek_kondisi->kondisi1()."<br>";
 echo $objek_kondisi->kondisi2()."<br>";
 echo "<hr>";


 //looping dengan konsep oop
 class looping{

public $angka = 0;

public function loop1(){

   for($num = 0; $num <= 5; $num++){
   echo "$num";
   }

    }

    
public function loop2(){

   while($this->angka <= 5){
  $this->angka++;
  echo "$this->angka";
   }
 
     }

private $bulan = 7;
public function loop3(){
 switch($this->bulan){
     
        case '1':
        echo "January";
         break;
          case '2';
          echo "February";
          break;
          case '3';
          echo "March";
          break;
          case '4';
          echo "April";
          break;
          case '5';
          echo "May";
          break;
          case '6';
          echo "June";
          break;
          case '7';
          echo "Jule";
          break;
          case '8';
          echo "Agustus";
          break;
          case '9';
          echo "September";
          break;
          case '10';
          echo "Oktober";
          break;
          case '11';
          echo "November";
          break;
          case '12';
          echo "Desember";
          break;
    
            default:
            echo "Ups....";
              break;

 }





}     




}

 
$objek_looping = new looping;
echo $objek_looping->loop1()."<br>";
echo $objek_looping->loop2()."<br>";
echo $objek_looping->loop3()."<br>";

echo "<hr>";

 class ray{

public function arraymakanan(){

$a = array('Pizza', 'Nasi Goreng', 'Lemper', 'Tahu');

echo $a[0]."<br>";
echo $a[1]."<br>";
echo $a[2]."<br>";
echo $a[3]."<br>";
}

public function arrayminuman(){

    $b = array('Mizone', 'Teh Pucuk', 'Air Mineral', 'Coca-Cola');
    
    echo $b[0]."<br>";
    echo $b[1]."<br>";
    echo $b[2]."<br>";
    echo $b[3]."<br>";

}



 }

 $objek_array = new ray;
 echo $objek_array->arraymakanan()."<br>";
 echo $objek_array->arrayminuman()."<br>";
 echo "<hr>";

?>