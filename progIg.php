<?php

include("Daftar_Ig.php");
include("By_Email.php") ;
include("By_Telp.php") ;

$email = $_POST["email"];
$nama = $_POST["nama"];
$sandi = $_POST["sandi"];
$telp =  $_POST["no"];
$kode = $_POST["kode"];

$ig = new By_Email($email, $nama, $sandi);
echo "<strong>Parent</strong> <br/>";
	$ig->getData();
echo "<hr/>";
	$igp = new By_Telp($telp, $kode);
echo "<strong>Child</strong> <br/>";
	$igp->getData();

?> 
