# Cara Instalasi #
  1. Unduh source-code terbaru PSBOnline Free dari http://code.emka.web.id/
  1. Ekstrak file tersebut dengan WinRAR/WinZIP/IZArc atau unzip jika anda menggunakan Linux, pada direktori C:\xampp\htdocs\ (pengguna XAMPP) atau C:\wampp\www (pengguna WAMP) atau /var/www (pengguna Linux) atau /home/nama\_user/public\_html
  1. Buat database MySQL baru dengan nama psbonlinefree (atau sesuaikan sendiri)
  1. Dump file install.sql ke database baru tersebut dengan bantuan PHPMyAdmin, Navicat maupun perintah mysql -unama\_user -ppassword < install.sql
  1. Ubah konfigurasi database, url aplikasi dan konfigurasi lainnya yang terdapat di file **/modul/konfigurasi.php**
  1. Ubah konten aplikasi (visi, misi, sejarah dll) di folder /konten
  1. PSBOnline Siap digunakan

_Silakan gunakan XAMPP Server atau **GapuraLinux Server** sebagai server anda_.

Aplikasi ini dilisensikan dalam skema CC BY NC ND (Creative Common License No-Commercial No-Derrvative) Anda bebas membagikan source code ini, tapi tidak diperbolehkan memanfaatnya untuk tujuan komersial dan mengubah konten didalamnya sebagian atau keseluruhan (kecuali file konfigurasi) **)**

_Lihat file LISENSI.txt_