<?php 
//membuat kelas laptop
class laptop {
	//membuat protected properti
	protected $pemilik= "Agung";
	//membuat public method
	public function hidupkan_laptop(){
		return "Hidupkan Laptop";
	}
	public function setPemilik($pmlk) {
		$this->pemilik = $pmlk;
	}
}
//membuat objek dari kelas laptop (instansiasi)
$laptop_agung = new laptop();
//set properti
$laptop_agung->setPemilik("Agung");
//menampilkan properti
echo $laptop_agung->hidupkan_laptop();
 ?>