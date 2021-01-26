<?php

echo "<center><b>Belajar OOP PHP Static </b></center>";


class Kelas{
    //property static
  public static $nama = "Kepudang",
                $jumlah = 30,
                $walkel = "Reni";

  //property static
  public static $angka = 1;       

        //method static
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
echo "<hr>";
 
 class saya{

     public static $nama = "Faiz Nurullah",
                   $umur = 16,
                   $type = "Pendiam";

     public function sayahallo(){
         return self::$nama;
     }
 }

 $objek_static_saya = new saya;
 echo $objek_static_saya->sayahallo()."<br>";
 echo saya::$umur."<br>";
 echo saya::$type."<br>";
 echo "<hr>";
?>