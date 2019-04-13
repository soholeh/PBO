<?php 

	class SignUp_Ig 
	{
		public $email;
		public $namaLengkap;
		private $kataSandi;

		public function __construct($email, $nama, $sandi)
		{
			$this->email = $email;
			$this->namaLengkap = $nama;
			$this->kataSandi = $sandi;
		}

		public function getEmail(){
			return $this->email;
		}
		public function getNamaLengkap(){
			return $this->namaLengkap;
		}
		public function getkataSandi(){
			return $this->kataSandi;
		}
	}


	class Telp_Ig extends SignUp_Ig
	{
		private $telpon;

		public function __construct($telp)
		{
			$this->telpon = $telp;
		}
		public function getTelpon()
		{
			return $this->telpon;
		}
	}
 ?>