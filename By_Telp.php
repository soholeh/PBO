<?php
Class By_Telp extends Daftar_Ig 
{
  private $telpon ;
  protected $kodeKonfirmasi;
  
  public function __construct($telp,$kode)
  {
    $this->setTelpon($telp) ;
    $this->setKodeKonfirmasi($kode) ;
  }
  
  public function setTelpon($telp) {
    $this->telpon=$telp ;
  } 
  public function getTelpon(){
    return $this->telpon  ;
  } 
  public function setkodeKonfirmasi($kode) {
    $this->kodeKonfirmasi=$kode ;
  } 
  public function getKodeKonfirmasi(){
    return $this->kodeKonfirmasi  ;
  } 
  //method overriding dari abstract Daftar_Ig
  public function getData() {
    echo "No.Telp : " . $this->telpon ."<br/>";
    echo "Kode Konfirmasi : " . $this->kodeKonfirmasi ."<br/>";
  Pemberitahuan::fail();
  } 
}
?>