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

$sql = "SELECT * FROM customer";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>ID Customer</td><td>Nama Customer</td><td>Alamat Customer</td><td>Hp Customer<</td><td>Jenis Kelamin</td><td>Chek in</td><td>Chek Out</td><td>Lama Inap</td><td>Jenis Kamar</td> colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['alamatcustomer']."</td>";
    echo "<td>".$row['hpcustomer']."</td>";
    echo "<td>".$row['jkcustomer']."</td>";
    echo "<td>".$row['chek_in']."</td>";
    echo "<td>".$row['chek_out']."</td>";
    echo "<td>".$row['lamainap']."</td>";
    echo "<td>".$row['jeniskamar']."</td>";
    echo "<td><a href='formupdate_customer.php?idcustomer=".$row['idcustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?idcustomer=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
