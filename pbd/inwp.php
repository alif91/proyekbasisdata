<!DOCTYPE html>
<html>
	<head>
		<title>form input WP</title>
		<link rel="stylesheet" href="style/form.css" />
		<link rel="stylesheet" href="style/font.css" />
	</head>
	<body>
		<h1>Input Wajib Pajak PPh</h1>
		<table>
		<form action= "simWP.php" method="post" name="inputWP">

		<tr>
			<td>NPWP</td>
			<td><input type="text" name="npwp" required class="in" placeholder="nomor pokok wajib pajak" /></td>
		</tr>
		<tr>
			<td>Nama WP</td>
			<td><input type="text" name="nama_wp" required class="in" placeholder="nama wajib pajak" /></td>
		</tr>
		<tr>
			<td>Jenis Kelamin:</td>
			<td><input type="radio" name="jk" value="P"> Pria
				<input type="radio" name="jk" value="W"> Wanita
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td><select name="status" class="sl">
			<option value='Menikah'> Menikah</option>
			<option value='Belum Menikah'> Belum Menikah</option>
			</select></td>
		</tr>
		<tr>
			<td>Jumlah Anak</td>
			<td><input type="text" name="jml_anak" required class="in" placeholder="jumlah anak" /></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td><input type="text" name="pekerjaan" required class="in" placeholder="pekerjaan" /></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input type="submit" name="submit" value="Simpan" class="btn" />
			<input type="reset" name="reset" value="Reset" class="btn" />
			</td>
		</tr>	
		</form>	
	</body>
</html>
