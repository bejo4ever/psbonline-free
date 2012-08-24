<?php
/*
 * @package: PSBOnline Free
 * @subpackage: Index file
 *
 * @author: Luthfi Emka
 *
 * PSBOnline Free adalah edisi bebas pakai dan edisi kode sumber terbuka dari-
 * perangkat lunak Pendaftaran Siswa baru Online. Aplikasi ini dilisensikan
 * dalam skema CC BY NC ND (Creative Common License No-Commercial No-Derrvative)
 * Anda bebas membagikan source code ini, tapi tidak diperbolehkan memanfaatnya
 * untuk tujuan komersial dan mengubah konten didalamnya sebagian atau
 * keseluruhan (kecuali file konfigurasi).
 *
 * -----------------------------------------------------------------------------
 * Untuk versi Pro, silakan hubungi:
 *
 * Luthfi Maslichul Kurniawan, S.Pd
 * Perum Griya Sekar Gading Blok G no 4, Kel. Kalisegoro, Gunungpati
 * Semarang, 50229 Jawa Tengah. 
 *
 * Via e-mail: luthfi.emka@gmail.com
 * Via web: http://code.emka.web.id/
 * Via phone: 0852 257 33685
 * -----------------------------------------------------------------------------
 */
?>
<?php
$id_peserta = filterinput($_GET['i']);
$results = mysql_query("SELECT * from pendaftar where id='$id_peserta' limit 1",$id_db);
$data = mysql_fetch_array($results);
$tanggallahir = explode('-',$data['tgllahir']);
$tgl = $tanggallahir[0];
$bln = $tanggallahir[1];
$thn = $tanggallahir[2];
?>
<h2>EDIT DATA FORMULIR PENDAFTARAN</h2>
<form method="POST" name="frmdaftar" action="?p=3&e=1">
<table style="font-size: 77%;">
<tr>
	<td>Nama</td>
	<td><input type="hidden" name="psrta_id" value="<?php echo $data['id'];?>" /><input type="text" name="tnama" value="<?php echo $data['nama'];?>" style="width: 280px;"/></td>
</tr>
<tr>
	<td>No. Pendaftaran</td>
	<td><input type="text" name="tnodaftar" value="<?php echo $data['nopendaftaran'];?>" disabled="disabled"/></td>
</tr>
<tr>
	<td>No. Peserta Ujian Nasional SD/MI</td>
	<td><input type="text" name="tnoujiannas" value="<?php echo $data['noujiannasional'];?>" style="width: 280px;" maxlength="10"/></td>
</tr>
<tr>
	<td>Tahun Kelulusan</td>
	<td><input type="text" name="tthnlls" value="<?php echo $data['thnlulus'];?>" style="width: 280px;" maxlength="4" size="4"/></td>
</tr>
<tr>
	<td>Tempat Lahir</td>
	<td><input type="text" name="ttmplhr" value="<?php echo $data['tempatlahir'];?>" /></td>
</tr>
<tr>
	<td>Tanggal Lahir</td>
	<td>
	<?php
	echo '<select name="tgl" style="width: 50px;">';
	for($i=1;$i<32;$i++){
		if($i==$tgl){
			echo "<option value='$i' selected='selected'>$i</option>";
		}else{
			echo "<option value='$i'>$i</option>";
		}
	}
	echo '</select>';
	?>
	<?php
	echo '<select name="bln" style="width: 50px;">';
	for($i=1;$i<13;$i++){
		if($i==$bln){
			if($i<10){
			echo "<option value='0$i' selected='selected'>0$i</option>";
			}else{
				echo "<option value='$i' selected='selected'>$i</option>";
			}
		}else{
				if($i<10){
				echo "<option value='0$i' >0$i</option>";
				}else{
					echo "<option value='$i'>$i</option>";
				}
			}
	}
	echo '</select>';
	echo '<select name="thn" style="width: 70px;">';
	for($i=1;$i<30;$i++){
		$tahun = date("Y") - $i;
		if($tahun==$thn){
			echo "<option value='$tahun' selected='selected' >$tahun $x</option>";
		}else{
			echo "<option value='$tahun' >$tahun $x</option>";
			}
		
	}
	echo '</select>';
	?>
	</td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
	<td>
	<select name="tjklmn" style="width: 230px;">
	<?php
	if($data['kelamin']=='L'){
		echo '<option value="L" selected="selected">Laki-laki</option>';
		echo '<option value="P" >Perempuan</option>';
	}
	if($data['kelamin']=='P'){
		echo '<option value="L" >Laki-laki</option>';
		echo '<option value="P" selected="selected">Perempuan</option>';
		}
	?>
	</select>
	</td>
</tr>
<tr>
	<td>Alamat lengkap</td>
	<td><input type="text" name="talmt" value="<?php echo $data['alamat'];?>" /></td>
</tr>
<tr>
	<td>Kota/Kabupaten</td>
	<td><input type="text" name="tkota" value="<?php echo $data['kabkota'];?>" /></td>
</tr>
<tr>
	<td>No.Telp/HP</td>
	<td><input type="text" name="ttelp" value="<?php echo $data['notelphp'];?>" /></td>
</tr>
<tr>
	<td>Asal Sekolah</td>
	<td><input type="text" name="tskol" value="<?php echo $data['sekolahasal'];?>" /></td>
</tr>
<tr>
	<td>Nilai UASBN</td>
	<td><input type="text" name="tuasbn" value="<?php echo $data['nilaiuas'];?>" disabled="disabled"/></td>
</tr>
<tr>
	<td>Nilai Bhs Indonesia</td>
	<td><input type="text" name="tnindo" value="<?php echo $data['nilaiindo'];?>" /></td>
</tr>
<tr>
	<td>Nilai Matematika</td>
	<td><input type="text" name="tnmtk" value="<?php echo $data['nilaimatematika'];?>" /></td>
</tr>
<tr>
	<td>Nilai IPA</td>
	<td><input type="text" name="tnipa" value="<?php echo $data['nilaiipa'];?>" /></td>
</tr>
<tr>
	<td><br/><br/><input type="submit" name="btsubmit" value="SIMPAN" class="medium button orange" style="width: 170px; height: 41px;"/></td>
	<td><br/><br/><a href="<?php echo $url_situs;?>" class="medium button green" style="width: 110px; height: 22px; border-top-left-radius: 6px 6px; border-top-right-radius: 6px 6px; border-bottom-left-radius: 6px 6px; border-bottom-right-radius: 6px 6px; ">BATAL</a></td>
</tr>
</table>
</form>
<br/><br/>

