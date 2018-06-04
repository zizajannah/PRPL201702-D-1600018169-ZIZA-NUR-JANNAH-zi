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

$idcustomer = $_POST ['idcustomer'];
$namacustomer = $_POST ['namacustomer'];
$alamatcustomer = $_POST ['alamatcustomer'];
$hpcustomer = $_POST ['hpcustomer'];
$jkcustomer = $_POST ['jkcustomer'];
$chek_in = $_POST ['chek_in'];
$chek_out = $_POST ['chek_out'];


$sql = "INSERT INTO customer(idcustomer, namacustomer, alamatcustomer, hpcustomer, jkcustomer, chek_in, chek_out) VALUES ('$idcustomer','$namacustomer','$alamatcustomer','$hpcustomer','$jkcustomer','$chek_in','$chek_out')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_customer.php'>Tambah Data Customer<a/>";
?>