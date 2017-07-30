<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>Proyek Basis Data</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
	
<div id="slider">
	<div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
		
            <div id="header">
                <h1><a href="#"><img src="images/tooplate_logo.png" title="Notebook Template - tooplate.com" alt="Notebook free html template" /></a></h1>
            </div>    
			
            <div id="menu">
				<ul class="navigation"><a href="#home" class="selected menu_01">Home</a></ul>
                <ul class="navigation"><a href="#" class="selected menu_01">Pajak Penghasilan</a></ul>
					<div class="service_list">
                    <li><a href="#inputpph" class="menu_03">Input WP PPh</a></li>
					<li><a href="#bayarpph" class="menu_03">Bayar PPh</a></li>
					<li><a href="#laporanpph" class="menu_03">Laporan</a></li>
					</div>
				
             </div>
		</div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
			<div class="panel" id="home">
				   <div class="content_section">
				   <center>
					  <h2>Perhitungan Pajak </br></br> Pajak Penghasilan Pasal 21</br>
					  </center>
					  </div>
					<div class="content_section">
					  <h3>Disusun Oleh :<h3>
					  <p>NIM	 	 : 123210001</p>
					 <p>NAMA		 : Alif Yudhia Pratama</p>
					 <p>JURUSAN    	 : Komputerisasi Akuntansi</p>
					 <p>JENJANG 	 : D3</p>
					 <p>TAHUN AJARAN : 2017</p>
				</div>
			</div>
              <div class="panel" id="inputpph">
				   <div class="content_section">
				   <center>
					  <h2><!--<font color = 'Green'>-->Input Data Wajib Pajak<!--</font>--><br/><br/>PPh</h2>
					  </center>
					  </div>
					<div id="contact_form">
					<center>
					<link rel="stylesheet" href="style/form.css" />
					<link rel="stylesheet" href="style/font.css" />
					<table>
						<form action= "simWP.php" method="post" name="inwp">
						<tr>
						<td><!--<font color = 'Green'>-->NPWP<!--</font>--></td>
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
						</table>
						</center>
					  </div>
              </div> <!-- end of home -->
			  
			  <div class="panel" id="bayarpph">
					<div class="content_section">
					  <center>
					  <h2>Bayar Pajak<br/> <br/>PPh</h2>
					  </center>
					 </div>
					<div id="contact_form">
					<center>
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
					<table>
					<form action= "simbayarpph.php" method="post">
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
					<td><input type="text" name="ptkp" id="ptkp" class="in" placeholder="PTKP" onchange="hitung_pph_teruang()"></td>
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
					</table>
					</center>
					</div>
              </div> <!-- end of aboutus -->

	
		<div class="panel" id="laporanpph">
                <div class="content_section">
                  <center>
                  <h2>Laporan Bayar Pajak<br/> <br/>PPh</h2>
				  </center>
                 </div>
					<div id="contact_form">
					<center>
					<link rel="stylesheet" href="style/form.css" />
					<link rel="stylesheet" href="style/font.css" />
					<table>
					<form action= "" method="post" name="">
					<?php
					include "koneksi.php";
					$hasil = mysql_query("select * from bayar_pph");
					if(!$hasil)
					die(" Gagal Query data Buku karena : ".mysql_error());

					echo "<table border=1 center>
					<tr style='background-color:yellow'>
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
					/*if ($no % 2 == 0){
					echo "<tr style='background-color:lightgreen'>";
					}else {
					echo "<tr style='background-color:green'>";
					}*/
					echo "<td>$no</td>";
					echo "<td>".$row[tgl_transaksi]."</td>";
					echo "<td>".$row[npwp]."</td>";
					echo "<td>".$row[no_transaksi]."</td>";
					echo "<td>".$row[pph_terutang]."</td>";
					echo "</td>";
					echo "</tr>";
					}
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
					</table>
					</center>
					</div>
              </div> <!-- end of aboutus -->
				
                <div class="col_380 float_r"> </div>
              </div>
            </div>
          </div><!-- end of scroll -->
		</div>
    </div> <!-- end of content -->
</div>

<div id="footer">
      <div id="footer_left">
		       
    </div>
	
    <div class="cleaner"></div>
</div>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>