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

// konfigurasi situs /--------------------------------------------------
$url_situs = "http://localhost/psbonlinefree/";
$nama_sekolah = "MTs NU Nurul Ulum";
$alamat_sekolah = "Bulungkulon, kec. Jekulo";
$masa_pendaftaran = "1 - 31 Juli 2011";
$jam_pendaftaran = "07.00 - 13.00";
$judul_situs = "Pendaftaran Siswa Baru - $nama_sekolah";


//konfigurasi database /------------------------------------------------
$namahost = "127.0.0.1";
$namauser = "root";
$passwdb  = "";
$namadb   = "psbonlinefree";


//koneksi database /----------------------------------------------------
$id_db =mysql_connect($namahost,$namauser,$passwdb);
if(!$id_db)
    die("Galat: database tidak dapat dibuka, silakan hubungi administrator sistem anda...");
if(!mysql_select_db($namadb,$id_db))
    die("Galat: Koneksi Database gagal,silakan hubungi administrator sistem anda segera...");

include "fungsi.php";
include "konten-default.php";

define('AKSESFILE','ya');
?>
