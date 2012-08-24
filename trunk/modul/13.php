<?php
/*
 * @package: PSBOnline Free
 * @subpackage: Index file
 *
 * @author: Luthfi Emka
 *
 * PSBOnline Free adalah edisi bebas pakai dan edisi kode sumber terbuka dari-
 * perangkat lunak Pendaftaran Siswa baru Online. Aplikasi ini dilisensikan
 * dalam skema CC BY NC ND (Creative Common License No-Commercial No-Derivative)
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
?>
<h2>Validasi Pendaftaran Siswa Baru</h2>
<p>
    Seluruh peserta yang melakukan pendaftaran online, HARUS divalidasi. Persyaratan untuk memvalidasi adalah
    kelengkapan syarat-syarat pendaftaran.
<form action="?p=14" method="POST">
	<table >
		<tr><td align="center">Masukkan nama calon siswa atau nomer pendaftaran</td></tr>
		<tr><td align="center"><input type="text" value="" name="tsearch" size="20"></td></tr>
		<tr><td align="center"><input type="submit" name="submit" value="Cari" class="button pink" /></td></tr>
	</table>
</form>