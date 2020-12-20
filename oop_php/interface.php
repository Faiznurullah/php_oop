<?php

echo "<center><b>Belajar OOP PHP Interface</b></center>";

//contoh 1

//ini interface
interface buah {
    public function makan();

    public function setwarna($warna);
}



//ini class untuk mengimplementasikan si interface
class durian implements buah{
    protected $warna;

    public function makan(){
        return "Kunya Orah...";
    }

    public function setwarna($warna = "Kuning"){

    return  $this->warna = $warna;

    }
}


class jeruk implements buah{
    protected $warna;

    public function makan(){
        return "Tinggal Telan Saja...";
    }

    public function setwarna($warna = "Orange"){

        return  $this->warna = $warna;

    }
}

$objek_buah_durian = new durian;
$objek_buah_jeruk = new jeruk;

echo $objek_buah_durian->makan()."<br>";
echo $objek_buah_jeruk->makan()."<br>";
echo "Warna Durian Itu ".$objek_buah_durian->setwarna()."<br>";
echo "Warna Jeruk Itu ".$objek_buah_jeruk->setwarna()."<br>";

echo "<hr>";


//contoh 2

//ini interface 1
 interface Email{

    public function komunikasiemail($cara);

 }

 //ini interface 2
 interface Telpone{

public function komunikasitelepon($how);

 }

 //ini class
 class komunikasi implements Email,Telpone{
     protected $cara,
               $how;

public function komunikasiemail($cara="Pake Gmail Lah..."){

return $this->cara = $cara;


}

public function komunikasitelepon($how = "Pake Telepon Lah..."){

return $this->how = $how;

}

 }

$objek_class_komunikasi = new komunikasi;
echo $objek_class_komunikasi->komunikasiemail()."<br>";
echo $objek_class_komunikasi->komunikasitelepon()."<br>";
echo "<hr>";


?>