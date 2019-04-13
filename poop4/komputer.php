<?php 
//membuat kelas komputer
class komputer{
	//membuat properti protected
	protected $prosesor;
}
//membuat kelas laptop
class laptop extends komputer{
	//membuat public property
	public $pemilik;
	//membuat public metode
	public function hidupkan_laptop(){
		return "Hidupkan Laptop";
	}
	public function set_prosesor($prosesor_baru){
		$this->prosesor = $prosesor_baru;
	}
	public function tampilkan_prosesor(){
		return $this->prosesor;
	}
}
//membuat objek dari kelas laptop (instansiasi)
$laptop_agung = new laptop();
//set properti
$laptop_agung->set_prosesor("Intel");
$laptop_agung->pemilik = "Agung";
//menampilkan properti
echo $laptop_agung->hidupkan_laptop()."<br/>";
echo "Prosesor yang digunakan : " . $laptop_agung->tampilkan_prosesor() . "<br/>";
echo "Pemilik : " . $laptop_agung->pemilik;
?>