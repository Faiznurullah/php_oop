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

class nyetakfilm extends nama{

    public function nyetakinfo(){

    return "$this->type,$this->nama,$this->penulis,$this->penerbit,$this->waktu";
        

    }


}

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

//ini Contoh3 Simple
echo "Contoh 3 <br>";

class parentt{

 public $nama="Andika Galih",
        $umur= 16;

}


class childd extends parentt{

    public function tampilinfo(){
         return "$this->nama,$this->umur";
    }

}

$objek_child = new childd();
echo $objek_child->tampilinfo();

echo "<hr>";
//Contoh 4
echo "Contoh 4 <br>";

class ibu{
    public $gender = "Perempuan",
           $warnakulit = "Putih",
           $tinggibadan = 170;

           public function __construct($gender, $warnakulit, $tinggibadan){
               $this->gender = $gender;
               $this->warnakulit = $warnakulit;
               $this->tinggibadan = $tinggibadan;
           }
           public function fenotipe(){

return "$this->gender,$this->warnakulit,$this->tinggibadan";

           }
}

class anak extends ibu{


}

$objek_anak = new anak("Laki-Laki", "Sawo Matang", 185);
echo $objek_anak->fenotipe();


?>