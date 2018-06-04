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

$sql = "SELECT * FROM karyawan";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Karyawan</h1>";
echo "<table border='1'>";
echo "<tr><td>ID Karyawan</td><td>Nama Karyawan</td><td>Alamat karyawan</td><td>Hp Karyawan<</td><td>Jenis Kelamin</td>colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idkaryawan']."</td>";
    echo "<td>".$row['namakaryawan']."</td>";
    echo "<td>".$row['alamatkaryawan']."</td>";
    echo "<td>".$row['hpkaryawan']."</td>";
    echo "<td>".$row['jkkaryawan']."</td>";
    echo "<td><a href='formupdate_karyawan.php?idkaryawan=".$row['idkaryawan']."'>Edit</a></td>";
    echo "<td><a href='delete_karyawan.php?idkaryawan=".$row['idkaryawan']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
