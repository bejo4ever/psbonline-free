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
session_start();
echo "<h2>Validasi Pendaftaran</h2>";
if(isset($_GET['p']) && isset($_GET['i']) && isset($_SESSION['session_login'])){
	$id_calon = filterinput($_GET['i']);
	$query = mysql_query("UPDATE pendaftar SET dipakai = '1' WHERE id='$id_calon' limit 1");
	if($query){
		echo "<p><strong>Sukses</strong>, memvalidasi pendaftaran peserta dengan ID: $id_calon</p>";
	}else{
		echo "<p><strong>Gagal</strong>, memvalidasi pendaftaran peserta dengan ID: $id_calon. Silakan ulangi lagi.</p>";
		}
	#header("Location: index.php");	
}else{
	echo "<p>Anda tidak berhak mengeksekusi perintah ini.</p>";
	}
?>
