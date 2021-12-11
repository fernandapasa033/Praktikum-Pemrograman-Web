<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<a href="logout.php">LOGOUT</a>
<br>
<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$no_internet=$_POST["no_internet"];
$Nama=$_POST["nama"];
$no_telp=$_POST["no_telp"];
$Alamat=$_POST["Alamat"];
$waktu_janjian=$_POST["waktu_janjian"];
$ket_gangguan=$_POST["ket_gangguan"];

//Query input menginput data kedalam tabel barang
  $sql="insert into form_gangguan (no_internet,nama,no_telp,Alamat,ket_gangguan,waktu_janjian) values
		('$no_internet','$Nama','$no_telp','$Alamat','$ket_gangguan','$waktu_janjian')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>

</body>
</html>