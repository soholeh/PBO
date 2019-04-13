<?php 
include ("SignUp_Ig.php");

$email = $_POST["email"];
$nama = $_POST["nama"];
$sandi = $_POST["sandi"];
$telp =  $_POST["no"];

$ig = new SignUp_Ig($email, $nama, $sandi);
echo "<strong>Parent</strong> <br/>";
	echo "Email : ".$ig->getEmail()."<br/>";
	echo "Nama Lengkap : ".$ig->getNamaLengkap()."<br/>";
	echo "Kata Sandi : ".$ig->getKataSandi()."<br/>";
	echo "<hr/>";
	$igp = new Telp_Ig($telp);
echo "<strong>Child</strong> <br/>";
	echo "No.Telp : ".$igp->getTelpon()."<br/>";
 ?>