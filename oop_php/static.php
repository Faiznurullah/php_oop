

<?php

echo "<center><b>Belajar OOP PHP Static </b></center>";


class Kelas{
  public static $nama = "Kepudang",
         $jumlah = 30,
         $walkel = "Reni";

  public static $angka = 1;       

         public static function helloworld(){
             return "Hello World !  ". self::$angka++ ." Kali";
         }

}



echo "Nama Kelas: ".Kelas::$nama." Jumlah Siswa: ".Kelas::$jumlah." Wali Kelas Bernama: ".Kelas::$walkel;
echo "<hr>";
echo Kelas::helloworld();
echo "<hr>";
echo Kelas::helloworld();
echo "<hr>";
echo Kelas::helloworld();
echo "<hr>";

//contoh 2
echo "Contoh 2 <br><br>";

class Kelas2{
 public $number = "1";

  public function hello(){
      return "Hallo ".$this->number++." Kali";
  }
}

$objek_kelas2 = new Kelas2;

echo $objek_kelas2->hello()."<br>";
echo $objek_kelas2->hello()."<br>";
echo $objek_kelas2->hello()."<br>";
echo "<hr>";
$objek_kelas_2 = new Kelas2;
echo $objek_kelas_2->hello()."<br>";
echo $objek_kelas_2->hello()."<br>";
echo $objek_kelas_2->hello()."<br>";

echo "<hr>";

//contoh 3
echo "Contoh 3 <br><br>";

class Kelas3{
 public static $numberr = 1;

 public function hai(){
     return "Hai".self::$numberr++."Kali";
 }


}
$objek_kelas3 = new Kelas3;
echo $objek_kelas3->hai()."<br>";
echo $objek_kelas3->hai()."<br>";
echo $objek_kelas3->hai()."<br>";
echo"<hr>";
$objek_kelas_3 = new Kelas3;
echo $objek_kelas_3->hai()."<br>";
echo $objek_kelas_3->hai()."<br>";
echo $objek_kelas_3->hai()."<br>";

echo "<hr>";

//contoh 4
echo "Contoh 4 <br><br>";
 
class Kelas4{
    public static $numbert = 1;

    public function Sayhelo(){

        return "Say Hello ".self::$numbert++." X";

    }
}
$objek_kelas4 = new Kelas4;
echo Kelas4::$numbert."<br>";
echo $objek_kelas4->Sayhelo()."<br>";
echo $objek_kelas4->Sayhelo()."<br>";
echo $objek_kelas4->Sayhelo()."<br>";
echo $objek_kelas4->Sayhelo()."<br>";
?>