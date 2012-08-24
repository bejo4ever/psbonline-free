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

$error = array();

//cek form kosong
if(empty($_POST['tnama']))
	$error[] = "kolom nama masih belum diisi";
if(empty($_POST['ttmplhr']))
	$error[] = "kolom tempat lahir masih belum diisi";
if(empty($_POST['tnoujiannas']))
	$error[] = "kolom nomor ujian nasional belum diisi";
if(empty($_POST['tthnlls']))
	$error[] = "kolom tahun lulus belum diisi";
if(empty($_POST['tgl']))
	$error[] = "kolom tanggal lahir masih belum diisi";
if(empty($_POST['bln']))
	$error[] = "kolom bulan lahir masih belum diisi";
if(empty($_POST['thn']))
	$error[] = "kolom tahun lahir masih belum diisi";
if(empty($_POST['tjklmn']))
	$error[] = "kolom jenis kelamin masih belum diisi";
if(empty($_POST['talmt']))
	$error[] = "kolom alamat masih belum diisi";
if(empty($_POST['tkota']))
	$error[] = "kolom kabupaten/kota masih belum diisi";
if(empty($_POST['tskol']))
	$error[] = "kolom asal sekolah masih belum diisi";
if(empty($_POST['tnindo']))
	$error[] = "kolom nilai bahasa indonesia masih belum diisi";
if(empty($_POST['tnmtk']))
	$error[] = "kolom nilai matematika masih belum diisi";
if(empty($_POST['tnipa']))
	$error[] = "kolom nilai IPA masih belum diisi";
if($_POST['tnindo']<6)
	$error[] = "Nilai bahasa indonesia kurang dari 6";
if($_POST['tnmtk']<6)
	$error[] = "Nilai matematika kurang dari 6";
if($_POST['tnipa']<6)
	$error[] = "Nilai IPA kurang dari 6";

$nama			= strtoupper(filterinput($_POST['tnama']));
$tanggallahir	= filterinput($_POST['tgl']).'-'.filterinput($_POST['bln']).'-'.filterinput($_POST['thn']);
$apa_sdhdaftars		= mysql_fetch_array(mysql_query("SELECT count(id) as hitung FROM pendaftar
					      WHERE nama LIKE '%$nama%' AND
					      tgllahir LIKE '%$tanggallahir%'
					      ",$id_db));

$mode = filterinput($_GET['e']);

$apa_sdhdaftar = $apa_sdhdaftars['hitung'];
if($apa_sdhdaftar > 0 & $mode !== '1')
	$error[] = "Anda sudah pernah mendaftar";


if(empty($error)){
	
	//filter form-form input
	$no_pendaftaran		= get_nopendaftaran();
	$noujiannasional	= filterinput($_POST['tnoujiannas']);
	$thnlulus		= filterinput($_POST['tthnlls']);
	$tempatlahir		= filterinput($_POST['ttmplhr']);
	$jeniskelamin		= filterinput($_POST['tjklmn']);
	$alamat			= filterinput($_POST['talmt']);
	$kabkota		= filterinput($_POST['tkota']);
	$notelphp		= filterinput($_POST['ttelp']);
	$asalsekolah		= filterinput($_POST['tskol']);
	$nilaiindo		= filterinput($_POST['tnindo']);
	$nilaiindo		= str_replace(',','.',$nilaiindo);
	$nilaimatematika	= filterinput($_POST['tnmtk']);
	$nilaimatematika	= str_replace(',','.',$nilaimatematika);
	$nilaiipa		= filterinput($_POST['tnipa']);
	$nilaiipa		= str_replace(',','.',$nilaiipa);
	$nilaiuasbn		= $nilaiindo + $nilaimatematika + $nilaiipa;
	$waktu			= time();
	
	
	//modus insert baru atau edit peserta
	
	
	switch($mode){
		case '1':
		$id_peserta = filterinput($_POST['psrta_id']);
		$query_insertdata = "UPDATE pendaftar SET nama='$nama',noujiannasional = '$noujiannasional', thnlulus = '$thnlulus', tempatlahir='$tempatlahir',tgllahir='$tanggallahir', kelamin='$jeniskelamin', alamat = '$alamat', kabkota='$kabkota', notelphp = '$notelphp', sekolahasal = '$asalsekolah', nilaiuas='$nilaiuasbn', nilaiindo='$nilaiindo', nilaimatematika='$nilaimatematika', nilaiipa='$nilaiipa' WHERE id='$id_peserta'";
		break;
		
		case '0':
		$query_insertdata = "INSERT INTO pendaftar (id,nama,nopendaftaran,noujiannasional,thnlulus,tempatlahir,tgllahir,kelamin,alamat,kabkota,notelphp,sekolahasal,nilaiuas,nilaiindo,nilaimatematika,nilaiipa,dipakai,diterima,waktu) VALUES (NULL,'$nama','$no_pendaftaran','$noujiannasional','$thnlulus','$tempatlahir','$tanggallahir','$jeniskelamin','$alamat','$kabkota','$notelphp','$asalsekolah','$nilaiuasbn','$nilaiindo','$nilaimatematika','$nilaiipa','0','0','$waktu')";
		break;
	}
	
	if(mysql_query($query_insertdata,$id_db)){
		
		if($mode == '0'){
			echo '<h2>Pendaftaran Sukses untuk nama calon siswa: '.strtoupper($nama).'</h2>';
			echo '<p>Silakan penuhi syarat-syarat validasi pendaftaran Online:
			<ol>
				<li>Fotokopi Ijasah/Surat Keterangan Lulus dari Sekolah (legalisir)</li>
				<li>Pas Foto 3x4 (tiga lembar)</li>
				<li>Uang Pendaftaran sebesar Rp 123.000,-</li>
			</ol>
			Syarat-syarat dikumpulkan maksimal 1x24 jam setelah pendaftaran online dilakukan.<br/>
			<p style="color: red;">Peserta yang TIDAK mengumpulkan persyaratan diatas,
			dinyatakan <strong>GUGUR</strong>.</p>
			</p>';
		}elseif($mode == '1'){
			echo '<h2>Update data Sukses untuk nama calon siswa: '.strtoupper($nama).'</h2>';
		}
		
		//header("Location: index.php");		
	}else{
		echo '<div style="font-size: 80%;">'; 
		echo '<h2>Pendaftaran Gagal...</h2>';
		header("Location: index.php");
		echo '</div>';
		}
	/*	
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';*/

}else{
	echo '<h2>Pendaftaran Gagal</h2>';
	echo '<p>Maaf, pendaftaran atas nama <strong>'.$_POST['tnama'].'</strong> gagal karena:</p>';
	echo '<ul>';
	foreach($error as $e){
		echo '<li>'.$e.'</li>';
		}
	echo '</ul>';
}
?>
