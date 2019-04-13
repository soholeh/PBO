<!DOCTYPE html>
<html>
<head>
	<title>
		OOP in PHP
	</title>
	<?php include("person.php"); ?>
</head>
<body>
<?php 
$pulut = new person("Pulut Suryanti","Jogja");
echo "Nama lengkap : " . $pulut->get_name()."<br/>";
echo "Alamat : " . $pulut->get_alamat()."<br/>";
 ?>
</body>
</html>