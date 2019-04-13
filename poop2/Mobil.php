<?php 	
class Mobil{
	var $warna = "Biru";
	var $merk = "BMW";
	var $harga = "10000000";

	function __construct($warnaBaru,$merkBaru,$hargaBaru){
	$this->warna = $warnaBaru;
	$this->merk = $merkBaru;
	$this->harga = $hargaBaru;
	}

	function set_warna($warnaBaru) {
		$this->warna = $warnaBaru;
	}
	function get_warna() {
		return $this->warna;
	}
	function set_merk($merkBaru) {
		$this->merk = $merkBaru;
	}function get_merk() {
		return $this->merk;
	}
	function set_harga($hargaBaru) {
		$this->harga = $hargaBaru;
	}
	function get_harga() {
		return $this->harga;
	}
	function gantiWarna ($warnaBaru){
		$this->warna = $warnaBaru;
	}
	function tampilWarna () {
		echo "Warna mobilnya : " . $this->warna ."<br/>";
	} 
	function tampilDataMobil () {
		echo "Warna mobilnya : " . $this->warna ."<br/>";
		echo "Merk mobilnya : " . $this->merk ."<br/>";
		echo "Harga mobilnya : " . $this->harga;
	} 
}
?>
