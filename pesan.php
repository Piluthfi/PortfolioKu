<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form contact
$nama=$_POST["nama"];
$email=$_POST["email"];
$pesan=$_POST["pesan"];

//Query input menginput data kedalam tabel contact
  $sql="insert into contact (nama,email,pesan) values
		('$nama','$email','$pesan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Terima Kasih Telah Menghubungi Saya";
	exit;
  }
else {
	echo "Gagal Mengirim Pesan";
	exit;
}  

?>