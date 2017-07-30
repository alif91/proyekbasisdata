<?php
	include "koneksi.php";
	$no_transaksi= $_POST['no_transaksi'];
	$tgl_transaksi = $_POST['tgl_transaksi'];
	$npwp = $_POST['npwp'];
	$p_netto = $_POST['p_netto'];
	$ptkp = $_POST['ptkp'];
	$pph_terutang = $_POST['pph_terutang'];
	$sql ="insert into bayar_pph
			values
		('$no_transaksi','$tgl_transaksi','$npwp','$p_netto','$ptkp','$pph_terutang')";
	$qry = mysql_query($sql) or die ("gagal input bayar pph".mysql_error());
	$no = 0;
	$no++;
  echo "<pre>";
  echo "BUKTI PEMBAYARAN<br/>";
  echo "===============<br/>";
  echo "NO. NOTA : ".$no_transaksi."<br/>";
  echo "TANGGAL  : ".$tgl_transaksi,"<br/>";
  echo "NAMA     : ".$npwp."<br/>";
  echo "<table border='1'>
			<tr>
			<th>NO</th>
			<th>Penghasilan Netto</th>
			<th>PTKP</th>
			<th>PPh Terutang</th>
			</tr>
			<br/>
			<br/>";
	
  echo "<tr>
				<td width='10px'>$no</td>
				<td width='150px' align='right'>Rp. ".number_format($p_netto)."</td>
				<td width='150px' align='right'>Rp. ".number_format($ptkp)."</td>
				<td width='200px' align='right'>Rp. ".number_format($pph_terutang)."</td>
				</tr>
				</table>";
				
  echo "</pre>";
  echo "<div id='noprint'>
  <input type='button' value='Cetak' onclick='javascript:print();'>
  <br/>
</div> 
  ";
?>
