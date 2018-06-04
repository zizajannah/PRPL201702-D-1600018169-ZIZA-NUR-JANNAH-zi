<!DOCTYPE html>
<html>
<head>
	<title>Hotel Database</title>
</head>
<body>
	<a href="index.php">Kembali Ke Menu </a>
	<h1>Tambah Customer</h1>
	<form action="simpan_customer.php" method="post">
		<table>
			<tr>
				<td>ID Customer</td>
				<td> : </td>
				<td><input type="text" name="idcustomer"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="namacustomer"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamatcustomer" rows="8" cols="40"></textarea>></td>
			</tr>
			<tr>
				<td>No.HP</td>
				<td> : </td>
				<td><input type="text" name="hpcustomer"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td><input type="text" name="jkcustomer"></td>
			</tr>
			<tr>
				<td>Chek In</td>
				<td> : </td>
				<td><input type="text" name="chek_in"></td>
			</tr>
			<tr>
				<td>Chek Out</td>
				<td> : </td>
				<td><input type="text" name="chek_out"></td>
			</tr>
			<tr>
				<td>Lama Menginap</td>
				<td> : </td>
				<td><input type="text" name="lamainap"></td>
			</tr>
			<tr>
				<td>Jenis Kamar</td>
				<td> : </td>
				<td><input type="text" name="jeniskamar"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>