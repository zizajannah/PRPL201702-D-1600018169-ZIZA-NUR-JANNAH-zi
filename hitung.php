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


//harga kamar
$VVIP = 300000;
$VIP = 250000;
$STR = 200000;
 
//form pembelian
if(!isset($_POST['proses']) && !isset($_POST['bayar'])){
 echo '
 <center>
 <h1>PEMESANAN KAMAR</h1>
 <p><i>silahkan masukkan jumlah pemesanan kamar</p>
 <form action="" method="POST">
 <table>
 <tr><td>VVIP(permalam) </td><td><input type="text" name="p1"></td></tr>
 <tr><td>VIP(permalam) </td><td><input type="text" name="p2"></td></tr>
 <tr><td>STR(permalam) </td><td><input type="text" name="p3"></td></tr>
 <tr><td></td><td><input type="submit" name="proses" value="proses"></td></tr>
 </table>
 </form>
 </center>';
 
//jumlah bayar
}elseif(isset($_POST['proses'])){
 $VVIP = $_POST['p1'] * $hargaVVIP;
 $VIP = $_POST['p2'] * $hargaVIP;
 $STR = $_POST['p3'] * $hargaSTR;
 $total = $hargaVVIP;
 $total = $hargaVIP;
 $total = $hargaSTR;
 
echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <p><i>silahkan masukkan uang pembayaran</p>
 <form action="" method="POST">
 <table>
 <tr><td>Total Bayar</td><td><input type="text" name="totalBayar" value="'.$total.'"></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahUang"></td></tr>
 <tr><td></td><td><input type="submit" name="bayar" value="bayar"></td></tr>
 </table>
 </form>
 </center>';
//jumlah bayar,jumlah uang,kembali
}elseif(isset($_POST['bayar'])){
 $totalBayar = $_POST['totalBayar'];
 $jumlahUang = $_POST['jumlahUang'];
 $kembalian = $jumlahUang - $totalBayar;
 echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <form action="" method="POST">
 <table>
 <tr><td>Total Bayar</td><td><input type="text" name="totalBayar" value="'.$totalBayar.'" readonly></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahuang" value="'.$jumlahUang.'" readonly></td></tr>
 <tr><td>Kembali</td><td><input type="text" name="jumlahuang" value="'.$kembalian.'" readonly></td></tr>
 </table>
 </form>
 </center>';
}
?>