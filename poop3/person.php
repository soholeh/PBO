<?php 
	class person{
	var $name, $alamat;

	function person($persons_name){
	$this->name = $persons_name;
	}
	function person($persons_name,$almt){
	$this->name = $persons_name;
	$this->alamat = $almt;
	}
	function set_name($new_name){
		$this->name = $new_name;
	}
	function get_name(){
		return $this->name;
	}
	}
 ?>
