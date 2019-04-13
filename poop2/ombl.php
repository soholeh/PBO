<?php 
include("Mobil.php");
	$mobil1 = new Mobil("Merah","Ferari","1500000000");
	
	$mobil1->tampilWarna();
	echo "<hr/>";
	$mobil1->tampilDataMobil();
 ?>