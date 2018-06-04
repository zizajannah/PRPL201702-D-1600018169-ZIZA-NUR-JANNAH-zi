<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "zi";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_GET['idkaryawan'];

$sql = "DELETE FROM karyawan WHERE idkaryawan='$idkaryawan'";
if($konek->query($sql)){
  echo "Data karyawan BERHASIL dihapus!<br/>";
}else{
  echo "Data karyawan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_karyawan.php'>Daftar Customer</a>";
?>
