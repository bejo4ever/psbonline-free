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
if(isset($_POST['submit'])){
	$query_cari = filterinput($_POST['tsearch']);
	$result = mysql_query("SELECT * FROM pendaftar where (nopendaftaran like '%$query_cari%' or nama like '%$query_cari%') and dipakai='1'");
?>

<h2>Pembatalan Pendaftaran Siswa Baru</h2>
<p><em>Silakan klik link 'batalkan' pada samping kanan nama Calon Siswa yang membatalkan pendaftarannya.</em></p>
<div style="font-size: 80%;">
<table id="hor-minimalist-a">
<tr>
	<th scope="col">No.</th>
	<th scope="col">Nomer Pendaftaran</th>
	<th scope="col">Nama</th>
	<th scope="col">Nilai UASBN</th>
	<th scope="col">Aksi</th>
</tr>
<?php
$no = 0; $no = $no+1;
	while($row = mysql_fetch_array($result))
	  {
	  ?>

	  <?php
		echo '<tr>';
		echo "<td>$no.</td>";	
		echo "<td>$row[nopendaftaran]</td>";
		echo "<td>$row[nama]</td>";
		echo "<td>$row[nilaiuas]</td>";
		echo "<td>";?>
		<a href="?p=9&i=<?php echo $row['id'];?>">Batalkan</a>
		<?php echo "</td>";
		echo '</tr>';
		$no++;
	  }
}

?>
</table>
</div>
