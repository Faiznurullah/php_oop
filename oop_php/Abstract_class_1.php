<?php

 abstract class buah{

     private $buah;

     //agar tidak dapat di wariskan ke class turunannya
   abstract public function caramakan();

  
 }

 //class turunan
 class durian extends buah{
 public $buah;

 //sehingga di class turunan di wajibkan memiliki method tersebut.
 public function caramakan(){

   return "1.Belah Buah Dahulu.  2.Makan deh.";
   
 }

 }


 //class  turunan
 class anggur extends buah{
  public $buah;

   //sehingga di class turunan di wajibkan memiliki method tersebut.
  public function caramakan(){

     return "1.Petik Buah Nya.  2.Tinggal Makan.";

  }

 }

 $objek_buah_durian = new durian;
 $objek_buah_anggur = new anggur;

echo $objek_buah_durian->caramakan()."<br>";
echo $objek_buah_anggur->caramakan()."<br>";

echo "<hr>";

//Contoh 2

//ini class parent
 abstract class komunikasi{
private $jenis;

 abstract public function cara();


 }


 //ini class child-1
  class whatsapp extends komunikasi{
public $jenis;

public function cara(){
  return "Buka WhatsApp";
}

  }

//ini class child-2 
 class email extends komunikasi{
public $jenis;

public function cara(){

  return "Buka Email";

}


 }

 $objek_whatsapp = new whatsapp;
 $objek_email = new email;
 echo $objek_whatsapp->cara()."<br>";
 echo $objek_email->cara()."<br>";

?>