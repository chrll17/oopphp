<?php
class produk
{
  public $judul, $penulis, $penerbit, $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 9)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function label()
  {
    return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
  }
}

$variabelproduk = new produk("kingkong");
echo "{$variabelproduk->label()}";
