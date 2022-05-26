<?php

echo "<center><b>Belajar OOP PHP Property & Method</b></center>";

 //Contoh 1
 echo "Contoh 1 <br>";
  class orang_itu{

    public $a = "Baik Hati",
           $b = "Cantik",
           $c = "Pintar",
           $d = "Perhatian";


     public function bebeb(){
         return "Orang Itu $this->a, $this->b, $this->c, $this->d";
     }


  }

$objek_bebeb = new orang_itu();
echo $objek_bebeb->hebat();

echo "<hr>";

echo "Contoh 2 <br>";

 class Faiz_Nurullah{

    public $a = "Jujur",
           $b = "Baik Hati",
           $c = "Tidak Ganteng",
           $d = "Amanah";


      public function saya(){
          return "Saya Itu $this->a, $this->b, $this->d, Namun Saya $this->c";
      }


 }

 $objek_saya = new Faiz_Nurullah();
 echo $objek_saya->saya();

?>
