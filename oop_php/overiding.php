<?php

echo "<center><b>Belajar OOP PHP Overidding </b></center>";

//ini adalah class
class nama{

    //ini adalah property
public $nama,
       $penulis,
       $penerbit,
       $type;
       
//ini adalah method

public function __construct($nama, $penulis, $penerbit,$type) {
$this->nama = $nama;
$this->penulis = $penulis;
$this->penerbit = $penerbit;
$this->type = $type;

}
 
public function nyetakinfo(){

    //ini method parent
return "{$this->nama},&nbsp;{$this->penulis},&nbsp;{$this->penerbit}";

}


}

class nyetakfilm extends nama{

public $waktu;
public function __construct($nama, $penulis, $penerbit,$waktu,$type){
    $this->type = $type;
    $this->nama = $nama;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->waktu = $waktu;
    

}

    
    public function nyetakinfo(){
//parent::nyetakinfo() dari class parent di atas 
         $strpertama = "{$this->type}:,".parent::nyetakinfo().",&nbsp;{$this->waktu},&nbsp;";
         return $strpertama;

    }


}

class nyetakbuku extends nama{
public $halaman;

public function __construct($nama, $penulis, $penerbit,$halaman,$type){
$this->type = $type;
$this->nama = $nama;
$this->penulis = $penulis;
$this->penerbit = $penerbit;
$this->halaman = $halaman;
 
}

    public function nyetakinfo(){
    $strkedua = "{$this->type}:,".parent::nyetakinfo().",&nbsp;{$this->halaman},&nbsp;";
    return $strkedua;
    }
    
}

//ini adalah objek 
$objek_film = new nyetakfilm("Filosofi Kopi", "Marry Jhone", "Cinema All", 150, "Film");
$objek_buku = new nyetakbuku("Laskar Pelangi", "Maxi Havier", "Nulis Indonesia", 100, "Buku");

//ini untuk menampilkan data
echo $objek_film->nyetakinfo();
echo "<hr>";
echo $objek_buku->nyetakinfo();

echo "<hr>";

//contoh 2
echo "Contoh 2 <br>";

class ibu{
    public
    $gender,
    $tinggi,
    $darah,
    $kulit,
    $cantik;
    public function __construct($gender, $tinggi, $darah, $kulit,$cantik){

 $this->gender = $gender;
 $this->tinggi = $tinggi;
 $this->darah = $darah;
 $this->kulit = $kulit;
 $this->cantik = $cantik;
    }


    public function printfeno(){
        return "Jenis Nya:{$this->gender}&nbsp;,Tinggi Nya:{$this->tinggi}&nbsp;,Tipe darah nya:{$this->darah}&nbsp;,Warna Kulit Nya:{$this->kulit}&nbsp;,{$this->cantik}";
    }

}

class anak extends ibu{
public function __construct($gender, $tinggi, $darah, $kulit){

    $this->gender = $gender;
    $this->tinggi = $tinggi;
    $this->darah = $darah;
    $this->kulit = $kulit;


}

public function printfeno(){
    $stre = parent::printfeno();
    return $stre;
}


}

$objek_anak = new anak("Laki-Laki", 170, "O", "Putih");
$objek_anak_p = new ibu("Perempuan", 165, "AB", "Putih","Cantik");
echo $objek_anak->printfeno()."<br>";
echo $objek_anak_p->printfeno();