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
<h2>HASIL SELEKSI DITERIMA</h2>
<div style="font-size: 80%;">
<table id="hor-minimalist-a">
<tr>
	<th scope="col">No.</th>
	<th scope="col">Nomer Pendaftaran</th>
	<th scope="col">Nama</th>
	<th scope="col">Nilai UASBN</th>
</tr>
<?php
$query_pendaftar = mysql_query("SELECT * from pendaftar where dipakai='1' and nilaiindo > 6 and nilaimatematika > 6 and nilaiipa > 6 order by nilaiuas desc, nilaiindo desc, nilaimatematika desc, nilaiipa desc, waktu asc",$id_db);
$no = 0; $no = $no+1;
while($data_pendaftar = mysql_fetch_array($query_pendaftar)){
	echo '<tr>';
	echo "<td>$no.</td>";	
	echo "<td>M.$data_pendaftar[nopendaftaran]/".date("Y")."</td>";
	echo "<td>$data_pendaftar[nama]</td>";
	echo "<td>$data_pendaftar[nilaiuas]</td>";
	echo '</tr>';
	$no++;
}
?>
</table>
</div>
