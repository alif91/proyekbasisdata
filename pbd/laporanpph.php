<center><html>
	<head>
		<title>Laporan Bayar Pajak</title>
		<link rel="stylesheet" href="style/form.css" />
		<link rel="stylesheet" href="style/font.css" />
	</head>
	<body>
		<h1>Laporan Pembayaran Pajak PPh</h1>
		<form action= "" method="post" name="">
<?php
include "koneksi.php";
$hasil = mysql_query("select * from bayar_pph");
if(!$hasil)
die(" Gagal Query data Buku karena : ".mysql_error());

echo "<table border=1 center>
<tr style='background-color:lightblue'>
<th>No</th>
<th>Tanggal</th>
<th>Wajib Pajak</th>
<th>No Transaksi</th>
<th>PPh Terutang</th>
</tr>";
$no=0;
while($row = mysql_fetch_array($hasil))
{
$no++;
if ($no % 2 == 0){
echo "<tr style='background-color:lightgreen'>";
}else {
echo "<tr style='background-color:green'>";
}
echo "<td>$no</td>";
echo "<td>".$row[tgl_transaksi]."</td>";
echo "<td>".$row[npwp]."</td>";
echo "<td>".$row[no_transaksi]."</td>";
echo "<td>".$row[pph_terutang]."</td>";
echo "</td>";
echo "</tr>";
}
echo
"<tr style='background-color:'>
</tr>";
echo "<table>";
?>
</center>
<tr />
<tr>
			<td></td>
			<td>
			<input type="button" name="submit" value="Cetak" onclick='javascript:print();' />
			<input type="button" name="submit" value="Keluar" onclick='javascript:system.exit(0);' />
			</td>
		</tr>	
		</form>	
	</body>
</html>