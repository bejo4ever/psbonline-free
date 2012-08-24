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

<h2>PROFIL <?php echo $nama_sekolah;?></h2>
	<h3>Sejarah Berdirinya</h3>
	<?php echo $sejarah_berdirinya;?>

	<h3>Visi <?php echo $nama_sekolah;?></h3>
	<?php echo $visi;?>
	<h3>Misi <?php echo $nama_sekolah;?></h3>
	<?php echo $misi;?>
	

<h2>Pendaftaran Siswa Baru</h2>
	<div>
		<p>
			<strong>Info Pendaftaran Siswa Baru</strong>
			<?php echo $nama_sekolah;?> akan dimulai pada <?php echo $masa_pendaftaran;?> <?php echo $jam_pendaftaran;?>WIB
		</p>
	</div>
	
	<h3>Syarat dan Ketentuan</h3>
	<?php echo $syarat_daftar;?>
	
	<h3>Alamat Pendaftaran</h3>
	<div>
		<p class="konten-depan">
			Alamat Sekretariat Pendaftaran: Gedung <?php echo $nama_sekolah;?>, <?php echo $alamat_sekolah;?>
		</p>
	</div>
	
	<div>
		<div id="downloadbox">
			<a id="downloadbtn" href="<?php echo $url_situs;?>?p=1" class="large button orange radius-button" title="Daftar Sekarang">Daftar Sekarang</a><br><br/><br/>
		</div>
	</div>

