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

if(isset($_POST['btnsubmitlogin'])){
	$error = array();

	//cek form kosong
	if(empty($_POST['username']) || empty($_POST['userpass']))
		$error[] = "Form user/password masih kosong";
	if(is_numeric($_POST['username']))
		$error[] = "Username berupa angka";
	if(strlen($_POST['username']) != strlen(htmlentities($_POST['username'])))
		$error[] = "Username mengandung karakter yg dilarang (Injeksi SQL/HTML)";
	$username = filterinput($_POST['username']);
	$password = sha1(filterinput($_POST['userpass']));
		
	$result = mysql_query("SELECT * FROM pengguna where username='$username' and aktif='1' limit 1");
	if(mysql_num_rows($result)<1){
		$error[] = "Password atau username belum terdaftar";
	}
	while($data = mysql_fetch_array($result)){
		echo $result['userpass'];
		if($password!=$data['userpass']){
			$error[] = "Password tidak dapat digunakan atau salah";
		}
	}

	if(empty($error)){
		$_SESSION['session_login'] = sha1($username)."|".base64_encode($password);
		header("Location: index.php");
		/*echo '<pre>';
		print_r($_POST);		
		echo '</pre>';*/
	}else{
		echo '<h2>Error:</h2>';
		echo '<ul>';
		foreach($error as $e){
			echo '<li>'.$e.'</li>';
			}
		echo '</ul>';
		}
}

?>
