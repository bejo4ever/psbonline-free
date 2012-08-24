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
<h3>Login Sekarang</h3>
<div style="font-size: 88%;">
<?php
if(!isset($_SESSION['session_login'])){
?>
	<form action="?p=5" method="POST" >
		<table>
			<tr>
				<td align="center">Isilah form berikut dengan username dan password anda untuk Login:</td>
			</tr>
			<tr>
				<td align="center"><em>username</em></td>
			</tr>
			<tr>
				<td align="center"><input type="text" size="40" maxlength="50" name="username" /></td>
			</tr>
			<tr>
				<td align="center"><em>password</em></td>
			</tr>
			<tr>
				<td align="center"><input type="password" size="40" name="userpass" /></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="btnsubmitlogin" value="Login" class="medium button orange" title="Daftar Sekarang" style="width: 170px; height: 41px;" /></td>
			</tr>
		</table>
	</form>
<?php
}else{
	?>
	<p>Anda sudah login.</p>
<?php
	header("Location: index.php");
	}
?>
</div>
