<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "zi";

$konek = new mysqli($host, $username, $password, $db_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST ['idkaryawan'];
$namacustomer = $_POST ['namakaryawan'];
$alamatcustomer = $_POST ['alamatkaryawan'];
$hpcustomer = $_POST ['hpkaryawan'];
$jkcustomer = $_POST ['jkkaryawan'];

$sql = "INSERT INTO karyawan(idkaryawan, namakaryawan, alamatkaryawan, hpkaryawan, jkkaryawan) VALUES ('$idkaryawan','$namakaryawan','$alamatkaryawan','$hpkaryawan','$jkkaryawan')";
if($konek->query($sql)){
	echo "Data Karyawan Berhasil Di tambah! <br/>";
}
else{
	echo "Data Karyawan Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_karyawan.php'>Tambah Data Karyawan<a/>";
?>