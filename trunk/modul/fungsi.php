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

//fungsi umum /---------------------------------------------------------
function filterinput($input)
	{
	$input=trim($input);
	$input=strip_tags($input);
	$input=nl2br($input);
	$input=addslashes($input);
	$input=stripslashes($input);
	$input=str_ireplace("'", "%", $input);
	$input=str_ireplace( "''", '%', $input );
	$input=str_ireplace( '""', '%', $input );
	$query = preg_replace( '|(?<!%)%s|', "'%s'", $input );
	$input=htmlentities($input, ENT_QUOTES);
	$input=ltrim($input);
	$input=rtrim($input);
	return $input;
	}

function get_nopendaftaran(){
	global $id_db;
	$no_awal     = 0;
	$data = mysql_fetch_array(mysql_query("SELECT max(nopendaftaran) FROM pendaftar limit 1"));
	$no_terakhir = $data['max(nopendaftaran)'];
	//return "wkwkwk$no_terakhir";
	if(empty($no_terakhir)){
		return "0001";
	}else{
		$no_pendaftaran = $no_terakhir + 1;
		switch(strlen($no_pendaftaran)){
			case '1': return "000".$no_pendaftaran; break;
			case '2': return "00".$no_pendaftaran; break;
			case '3': return "0".$no_pendaftaran; break;
			case '4': return $no_pendaftaran; break;
			default: return $no_pendaftaran; break;
		}
	}
}


?>