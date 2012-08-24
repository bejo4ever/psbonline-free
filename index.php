<?php
/*
 * @package: PSBOnline Free
 * @subpackage: Index file
 *
 * @author: Luthfi Emka
 *
 * PSBOnline Free adalah edisi bebas pakai dan edisi kode sumber terbuka dari-
 * perangkat lunak Pendaftaran Siswa baru Online. Aplikasi ini dilisensikan
 * dalam skema CC BY NC ND (Creative Common License No-Commercial No-Derrivative)
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
 * Via e-mail: intipadi@gmail.com
 * Via web: http://code.emka.web.id/
 * Via phone: 0852 257 33685
 * -----------------------------------------------------------------------------
 */

// mulai modus session aplikasi
session_start();

// set perilaku reporting error PHP
//error_reporting = E_ALL & ~ E_STRICT & ~E_NOTICE & ~E_DEPRECATED


// muat file konfigurasi umum
require_once "./modul/konfigurasi.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0025)http://ubuntu-manual.org/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US" lang="en_US" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $judul_situs;?></title>
<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
<div id="page">
	
	<div id="header">
		<a href="<?php echo $url_situs;?>"><img src="images/logo.png"/></a>
	</div>
	<div id="shadow-container">	
		<div id="navbar">
			Pendaftaran Siswa Baru <em>Online</em>
		</div>
		
		<div id="content">
			<div class="slideshow" >
				<br/><br/>
				<a href="<?php echo $url_situs;?>" class="medium button green radius-button" style="width: 120px;">Home</a><br/><br/>
				<a href="<?php echo $url_situs;?>?p=1" class="medium button orange radius-button" style="width: 120px;">Daftar</a><br/><br/>
				<a href="<?php echo $url_situs;?>?p=2" class="medium button yellow radius-button" style="width: 120px;">Jurnal</a><br/><br/>					
				<?php
				if(isset($_SESSION['session_login'])){
				?>
				<h3>Administrasi</h3>
				<a href="<?php echo $url_situs;?>?p=13" class="medium button pink radius-button" style="width: 120px;">Validasi</a><br/><br/>
				<a href="<?php echo $url_situs;?>?p=6" class="medium button pink radius-button" style="width: 120px;">Pembatalan</a><br/><br/>
				<a href="<?php echo $url_situs;?>?p=7" class="medium button pink radius-button" style="width: 120px;">Edit Biodata</a>
				<?php
				}
				?>
					<h2>Counter</h2>
					<?php
					if(file_exists("counter.txt")){
						$PF = fopen("counter.txt",'r');
						$count = fgets($PF,4096);
						fclose($PF);
						
						$PF = fopen("counter.txt",'w');
						fputs($PF,$count+1);
						fclose($PF);
						chop($count);
						$nb_digits = max(strlen($count),6);
						$count = substr("0000000000".$count,-$nb_digits);
						echo '<p style="font-size: 9px;"><small>Telah dikunjungi </small></p><strong>'.$count.'</strong><p style="font-size: 9px;"> kali</p>';
					}else{
						echo "Belum dikunjungi.";
					}
					?>
					</div>

					<div class="hometxt" style="font-size: 89%;">
						<?php
						if(!empty($_GET['p'])){
						  $halaman = trim($_GET['p']);
						  if(is_numeric($halaman) && file_exists("modul/$halaman.php")){
								include_once "modul/$halaman.php";
						  }else{
						        switch($halaman){
								default:
								if(file_exists("modul/0.php")){
									include_once "modul/0.php";
								}else{
									echo "<em>halaman yang anda cari tidak tersedia</em>";
									}
								break;
														
								case 'logout':
								session_destroy();
								header("Location: index.php");
								break;
							  }
						  }
						}elseif(file_exists("modul/0.php")){
									include_once "modul/0.php";
								}else{
									echo "<em>halaman yang anda cari tidak tersedia</em>";
									}
						  ?>
						
					</div>
					
					
				<div>
					<div><p></p><p style="clear:both"></p></div>

				</div>
				
				<?php
				require_once "./modul/footer.php";
				?>
			
		</div>
	
			
</div>
</div>
</body></html>
