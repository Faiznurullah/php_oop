<?php 

//public = bebas di panggil dimanapun
//protected = hanya bisa di panggil di class itu dan keturunanya
//private = hanya bisa di panggil di class tersebut.


echo "<center><b>Belajar OOP PHP Visibility</b></center>";

 class Produk{
  public
  $nama = "Lays",
  $jenis = "Makanan",
  $publisher = "Pt.Indofood";

  //bisa di panggil hanyapada class anak
  protected
  $harga = 2500;

  //hanya bisa di class ibu
  private
 $berat;

    public function __construct($nama, $jenis, $publisher, $harga,$berat){
  $this->nama = $nama;
  $this->jenis = $jenis;
  $this->publisher = $publisher;
  $this->harga = $harga;
  $this->berat = $berat;
    }

    public function cetakinfo(){
        return "$this->nama,$this->jenis,$this->publisher,$this->harga ";
    }


    //untuk memanggil berat yang privet
    public function cetakberat(){
        return "$this->berat";
    }

 }


 class anak_produk extends Produk{
     public function __construct(){


     }

    //bisa memanggil harga yang protected
public function kecilin(){
   return $this->harga = 1000;
}

public function besarin(){

    return $this->harga = 10000;
    
}

 }

$objek_makanan = new Produk("Tango", "Makanan", "Pt.Invansi Makanan", 3000, 12);
$objek_harga = new anak_produk();
echo $objek_makanan->cetakinfo()."<br>";
echo "<hr>";
echo $objek_makanan->cetakberat()."<br>";
echo "<hr>";
echo $objek_harga->kecilin();
echo "<hr>";
echo $objek_harga->besarin()."<br>";

echo "<hr>";


//contoh 2 
class Novel{
public $nama,
       $penulis,
       $penerbit,
       $halaman;

protected $harga;

public function __construct($nama, $penulis, $penerbit, $halaman, $harga){
$this->nama = $nama;
$this->penulis = $penulis;
$this->penerbit = $penerbit;
$this->halaman = $halaman;
$this->harga = $harga;

}


public function tampil(){
    return "$this->nama,$this->penulis,$this->penerbit,$this->halaman,$this->harga";
}


}


class buku extends Novel{

public function __construct(){


}

public function ambil(){

  return  $this->harga = 150000;
}

}

$objek_novel = new Novel("Dilan 1990", "Derry Teguh Wicaksono","Pt.Buku Nasional", 256, 200000 );
$objek_buku = new buku();
echo $objek_novel->tampil()."<br>";
echo "<hr>";
echo $objek_buku->ambil();
echo "<hr>";

//contoh 3




?>