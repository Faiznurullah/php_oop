<?php

echo "<center><b>Belajar OOP PHP Inheritance Bagian 1 </b></center>";

//ini adalah class
class nama{

    //ini adalah property
public $nama,
       $penulis,
       $penerbit,
       $halaman,
       $waktu,
       $type;
       
//ini adalah method

public function __construct($nama, $penulis, $penerbit,$halaman,$waktu,$type) {
$this->nama = $nama;
$this->penulis = $penulis;
$this->penerbit = $penerbit;
$this->halaman = $halaman;
$this->waktu = $waktu;
$this->type = $type;

}



//ini adalah method
    public function cetak(){

 $str = ("{$this->type}:,&nbsp;{$this->nama},&nbsp;{$this->penulis},&nbsp;{$this->penerbit},&nbsp;");

 //ini area pengecekan
 if($this->type == "Film") {

    $str .= $this->waktu."&nbsp; Jam";

 }else if($this->type == "Buku"){

  $str .= $this->halaman."&nbsp; Halaman";

 }

return $str;

    }

}

//ini adalah objek
$objek_film = new nama("Filosofi Kopi", "Marry Jhone", "Cinema All",0, 150, "Film");
$objek_buku = new nama("Laskar Pelangi", "Maxi Havier", "Nulis Indonesia", 100,0, "Buku");

//ini untuk menampilkan data
echo $objek_film->cetak();
echo "<hr>";
echo $objek_buku->cetak();

echo "<hr>";

//Ini Contoh2

class kendaraan{
public $nama,
       $merek,
       $pabrikan,
       $jumlahban1,
       $jumlahban2;


       public function __construct($nama, $merek, $pabrikan,$jumlahban1,$jumlahban2) {
      $this->nama = $nama;
      $this->merek = $merek;
      $this->pabrikan = $pabrikan;
      $this->jumlahban1 = $jumlahban1;
      $this->jumlahban2 = $jumlahban2;
       }

       public function cetakk(){
           $str2 = "{$this->nama}:,&nbsp;{$this->merek},&nbsp;{$this->pabrikan},&nbsp;";
           if($this->nama == "Motor Bebek"){
          $str2 .= $this->jumlahban1."&nbsp;Ban";
           }else if($this->nama == "Mobil"){
               $str2 .= $this->jumlahban2."&nbsp;Ban";
           }

           return $str2;
       }


}

$objek_motor= new kendaraan("Motor Bebek", "Supra-X", "Honda", 2,0);
$objek_mobil= new kendaraan("Mobil", "Avanza", "Toyota",0, 4);

echo $objek_motor->cetakk()."<br>";
echo $objek_mobil->cetakk()."<br>";
?>