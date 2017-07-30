
<!DOCTYPE html>
<html>
<form action= "simbayarpph.php" method="post">
	<head>
		<title>form input Bayar PPh</title>
		<link rel="stylesheet" href="style/form.css" />
		<link rel="stylesheet" href="style/font.css" />
		<script type="text/javascript">
		function hitung_pph_terutang() {
			//var p_netto = document.p_netto.value;
			//var ptkp = document.ptkp.value;
			//pph_terutang=(p_netto-ptkp)*0,5;
			//document.simpan.pph_terutang.value = Math.floor( pph_terutang );
			var p_netto = document.getElementById('p_netto').value;
			var ptkp = document.getElementById('ptkp').value;
			var pph_terutang = (p_netto-ptkp);
				pph_terutang = pph_terutang * 0.05;
			document.getElementById('pph_terutang').value = pph_terutang;
		}
</script>
	</head>
	<body>
	<h1>Form Bayar PPh</h1>
		<table>

		<tr>
			<td>No Transaksi</td>
			<td><input type="text" name="no_transaksi" required class="in" placeholder="Nomor Transaksi Bayar" /></td>
		</tr>
		<tr>
			<td>Tgl Transaksi</td>
			<td><input type="date" name="tgl_transaksi" required class="in" placeholder="YYYY-MM-DD" /></td>
		</tr>
		<tr>
			<td>Nama Wajib Pajak</td>
			<td><select name="npwp" class="sl">
				<?php	
				include "koneksi.php";
				$sql = "select* from wajib_pajak_pph";
					$qry = mysql_query($sql) or die ("gagal query data");
					while ($rst=mysql_fetch_array($qry)) {
						echo "<option value='$rst[nama_wp]'>$rst[nama_wp]</option>";}
				?>				
			</select></td>
		</tr>
		<tr>
			<td>Penghasilan Netto</td>
			<td><input type="text" name="p_netto" id="p_netto" class="in" placeholder="Penghasilan Netto"  onchange="hitung_pph_terutang()">
			</td>
		</tr>
		<tr>
			<td>PTKP</td>
			<td><input type="text" name="ptkp" id="ptkp" class="in" placeholder="PTKP" onchange="hitung_pph_terutang()"></td>
		</tr>
		<tr>
			<td>PPh Terutang </td>
			<td><input type="text" name="pph_terutang" id="pph_terutang" class="in" placeholder="PPh Terutang">
			</td>
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
