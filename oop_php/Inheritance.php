<?php

echo "<center><b>Belajar OOP PHP Inheritance Bagian 2 </b></center>";

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



}

//ini anak class
class nyetakfilm extends nama{

    public function nyetakinfo(){

    return "$this->type,$this->nama,$this->penulis,$this->penerbit,$this->waktu";
        

    }


}

//ini anak class
class nyetakbuku extends nama{

    public function nyetakwingfo(){
   return   "$this->type,$this->nama,$this->penulis,$this->penerbit,$this->halaman";
    }
    
}

//ini adalah objek 
$objek_film = new nyetakfilm("Filosofi Kopi", "Marry Jhone", "Cinema All",0, 150, "Film");
$objek_buku = new nyetakbuku("Laskar Pelangi", "Maxi Havier", "Nulis Indonesia", 100,0, "Buku");

//ini untuk menampilkan data
echo $objek_film->nyetakinfo();
echo "<hr>";
echo $objek_buku->nyetakwingfo();

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


}

class nyetakmotor extends kendaraan{

public function nyetakmotorr(){
    $str3 = "{$this->nama}:,{$this->merek}:,&nbsp;{$this->pabrikan},&nbsp;{$this->jumlahban1},&nbsp;";
    return $str3;
}

}

class nyetakmobil extends kendaraan{

public function nyetakmobill(){

    $str4 = "{$this->nama}:,{$this->merek}:,&nbsp;{$this->pabrikan},&nbsp;{$this->jumlahban2},&nbsp;";
    return $str4;
}

} 


$objek_motor= new nyetakmotor("Motor Bebek", "Supra-X", "Honda", 2,0);
$objek_mobil= new nyetakmobil("Mobil", "Avanza", "Toyota",0, 4);

echo $objek_motor->nyetakmotorr()."<br>";
echo $objek_mobil->nyetakmobill()."<br>";


echo "<hr>";

class ibu{

 public $warna= "Putih",
        $hidung= "Mancung",
        $tinggi= 170,
        $berat= 68;
    
        
public function cetak_ibu(){
    return "$this->warna, $this->hidung, $this->tinggi, $this->berat";
}

}
 
class anak extends ibu{

public function cetak_anak(){

        $this->tinggi = 180;
        $this->berat = 75;

return "$this->warna, $this->hidung, $this->tinggi, $this->berat";
}

}

$objek_ibu = new ibu;
$objek_anak = new anak;
echo $objek_anak->cetak_anak()."<br>";
echo $objek_ibu->cetak_ibu()."<br>";


  echo "<hr>";


  class bapak{
  protected $warna,
            $hidung,
            $tinggi,
            $berat;

     public function __construct(){

     $this->warna = "Sawo Matang";
     $this->hidung = "Mancung";
     $this->tinggi = 175;
     $this->berat = 45;

     } 

  }

  class anak_hrm extends bapak{

public function cetak_anak(){
    $this->warna = "Putih";
    $this->tinggi = 160;
    $this->berat = 65;

    return "$this->warna, $this->hidung, $this->tinggi, $this->berat";
   
}

  }

  $objek_anak_bapak = new anak_hrm();
  echo $objek_anak_bapak->cetak_anak();


   echo "<hr>";


?>