<?php
class Kendaraan{
  public $roda,$sim;
  public function __construct($roda='roda',$sim='sim'){
    $this->roda=$roda;
    $this->sim=$sim;
  }
  public function getkendaraan(){
    return "$this->roda,$this->sim";
  }
}
class Mobil extends Kendaraan{
  public $ketentuan;
  public function __construct($roda='roda',$sim='sim',$ketentuan='ketentuan'){
    parent::__construct($roda,$sim);
    $this->ketentuan=$ketentuan;
  }
  public function getmobil(){
    return "{$this->getkendaraan()},$this->ketentuan";
  }
}
class Motor extends Kendaraan{
  public $ketentuan;
  public function __construct($roda='roda',$sim='sim',$ketentuan='ketentuan'){
    parent::__construct($roda,$sim);
    $this->ketentuan=$ketentuan;
  }
  public function getmotor(){
    return "{$this->getkendaraan()},$this->ketentuan";
  }
}
$k=new Kendaraan();
echo "class kendaraan= ".$k->getkendaraan();
echo "<br>";
$m=new Mobil("roda 4"," sim A"," tanpa helm");
echo "class mobil= ".$m->getmobil();
echo "<br>";
$m=new Motor("roda 2"," sim C"," wajib helm");
echo "class motor= ".$m->getmotor();
echo "<hr>";





/*
  static keyword = 1.
                    2. nilai static akan selalu tetap meskipun object di instansiasi berulang kali
                    3. biasanya digunakan untuk membuat fungsi bantuan/helper
*/
class Statickeyword{
  public static $angka=1;
  public function getangka(){
    return self::$angka++;
  }
}
$a=new Statickeyword;
echo $a->getangka();
echo $a->getangka();
$b=new Statickeyword;
echo $b->getangka();
echo $b->getangka();

echo "<br>";

class Biasa{
  public $angka=1;
  public function getangka(){
    return $this->angka++;
  }
}
$a=new Biasa;
echo $a->getangka();
echo $a->getangka();
$b=new Biasa;
echo $b->getangka();
echo $b->getangka();
echo "<hr>";
// end static keyword





//  constant
class Constant{
  const KELAS='constant';
}
echo Constant::KELAS;
echo "<hr>";
//  end constant





/*  
    abstrac = 1. kelas yg tidak dapat di instansiasi
              2. wajib memiliki minimal 1 method abstrak tanpa implementasi
              3. kelas turunannya wajib mengimplementasikan method abstrak tadi
              4. boleh memiliki property / method biasa & static
*/
