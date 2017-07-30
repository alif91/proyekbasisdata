<?php
include "koneksi.php";
$hasil = mysql_query("select * from wajib_pajak_pph");
if(!$hasil)
die(" Gagal Query data Buku karena : ".mysql_error());

echo "<table border=1 center>
<tr style='background-color:yellow'>
<th>NPWP</th>
<th>Nama Wajib Pajak</th>
<th>Jenis Kelamin</th>
<th>Status</th>
<th>Jumlah Anak</th>
<th>Pekerjaan</th>
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
echo "<td>".$row[npwp]."</td>";
echo "<td>".$row[nama_wp]."</td>";
echo "<td>".$row[jk]."</td>";
echo "<td>".$row[status]."</td>";
echo "<td>".$row[jml_anak]."</td>";
echo "<td>".$row[pekerjaan]."</td>";
echo "</td>";
echo "</tr>";
}

echo "<table>";
?>