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

?>