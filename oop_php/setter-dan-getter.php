<?php 


echo "<center><b>Belajar OOP PHP Setter & Getter </b></center>";


//contoh 2 
class Novel{
public $nama,
       $penulis,
       $penerbit,
       $halaman;

protected $harga;
private $tersedia;
public function __construct($nama, $penulis, $penerbit, $halaman, $harga, $tersedia){
$this->nama = $nama;
$this->penulis = $penulis;
$this->penerbit = $penerbit;
$this->halaman = $halaman;
$this->harga = $harga;
$this->tersedia = $tersedia;

}


public function tampil(){
    return "$this->nama,$this->penulis,$this->penerbit,$this->halaman,$this->harga,$this->tersedia";
}

//ini set all item (setter)
public function settall( $nama = "Laskar Pelangi", $penulis ="Wini Tini Biti", $penerbit="Buku Cerpen", $halaman = 111, $harga = 120000, $tersedia = "Toko Buku"){

    $this->nama = $nama;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->halaman = $halaman;
    $this->harga = $harga;
    $this->tersedia = $tersedia;

}

//ini getter
public function gettall(){
    return "  $this->nama,$this->penulis, $this->penerbit, $this->halaman, $this->harga,$this->tersedia";
}

//ini setter
public function setnama($nama = "Payung Teduh"){
    $this->nama = $nama;
}

//ini getter
public function getnama(){
    return "$this->nama";
}

//ini setter
public function setpenulis($penulis = "Willy Woonka"){
$this->penulis = $penulis;
}

//ini getter
public function getpenulis(){
return "$this->penulis";
}





//ini akhir class
}


class buku extends Novel{

public function __construct(){


}

//ini setter
public function ambil(){
//ini getter
  return  $this->harga = 150000;
}

}

$objek_novel = new Novel("Dilan 1990", "Derry Teguh Wicaksono","Pt.Buku Nasional", 256, 200000,"Toko Buku Abadi" );
$objek_buku = new buku();
echo $objek_novel->tampil()."<br>";
echo "<hr>";
echo $objek_buku->ambil()."<br>";
echo "<hr>";
//ini setter
$objek_novel->settall();
//ini getter
echo $objek_novel->gettall()."<br>";
echo "<hr>";
//ini setter
$objek_novel->setnama();
//ini getter
echo $objek_novel->getnama()."<br>";
echo "<hr>";
//ini setter
$objek_novel->setpenulis();
//ini getter
echo $objek_novel->getpenulis();
?>