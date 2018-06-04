<?php 
	$konek = new mysqli("localhost","root","","zi");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
//tabel customer
	$sql = "create table customer (idcustomer varchar(30) not null primary key, namacustomer varchar(40), alamatcustomer varchar(200), hpcustomer varchar(15), jkcustomer varchar(2), chek_in varchar(20), chek_out varchar(20), lamamenginap varchar(20))";
//tabel pegawai
	$sql = "create table karyawan (idkaryawan varchar(30) not null primary key, namakaryawan varchar(40), alamatkaryawan varchar(200), hpkaryawan varchar(15), jkkaryawan varchar(2))";
	if($konek->query($sql)){
		echo "Tabel Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}

	$konek->close();
 ?>