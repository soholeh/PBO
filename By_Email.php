<?php
Class Pemberitahuan {
  public static function pass()
  {
    echo "<br><strong>Congratulation! Your Registration Success!</strong><br/>" ;
  }
  public static function fail()
  {
    echo "<br><strong>Sorry, Your Registration Failed!</strong><br/>" ;
  }
}

Class By_Email extends Daftar_Ig 
{

  protected $email ;
  public $namaLengkap ;
  private $kataSandi ;
  
  public function __construct($email, $nama, $sandi)
    {
      $this->setEmail($email);
      $this->setNamaLengkap($nama);
      $this->setKataSandi($sandi);
    }
  public function setEmail($email) {
    $this->email=$email ;
  }             
  public function getEmail(){
    return $this->email  ;
  } 
  public function setNamaLengkap($nama) {
    $this->namaLengkap=$nama ;
  } 
  public function getNamaLengkap() {
    return $this->namaLengkap  ;
  }
  public function setKataSandi($sandi) {
    return $this->kataSandi = $sandi  ;
  }
  public function getKataSandi() {
    return $this->kataSandi  ;
  } 
  public function getData(){
    echo "Email : " . $this->email ."<br/>";
    echo "Nama Lengkap : " . $this->namaLengkap ."<br/>";
    echo "Kata Sandi : " . $this->kataSandi;
    Pemberitahuan::pass();
  }   
}
?>