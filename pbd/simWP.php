<?php
	include "koneksi.php";
	$npwp = $_POST['npwp'];
	$nama_wp = $_POST['nama_wp'];
	$jk = $_POST['jk'];
	$status = $_POST['status'];
	$jml_anak = $_POST['jml_anak'];
	$pekerjaan = $_POST['pekerjaan'];
	$sql = "insert into wajib_pajak_pph
		(npwp,nama_wp,jk,status,jml_anak,pekerjaan)
		values
		('$npwp','$nama_wp','$jk','$status','$jml_anak','$pekerjaan')";
	$qry = mysql_query($sql) or die ("gagal input WP");
	header("location:index.php");
?>