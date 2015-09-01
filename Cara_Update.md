# Cara Update #
**PENTING**: Cadangkan dulu seluruh file PSBOnline Free yang anda gunakan sebelum diupdate, khususnya file konfigurasi dan file konten. Cadangkan pula database PSBOnline Free dengan PHPMyAdmin.

  1. Unduh update source-code terbaru PSBOnline Free dari http://code.emka.web.id/
  1. Ekstrak file tersebut pada direktori PSBOnline Free sebelumnya, klik OK/Continue ketika ada konfirmasi penimpaan/overwrite file.
  1. Dump file install.sql ke database baru tersebut dengan bantuan PHPMyAdmin, Navicat maupun perintah mysql -unama\_user -ppassword < install.sql
  1. Ubah konfigurasi database, url aplikasi dan konfigurasi lainnya yang terdapat di file **/modul/konfigurasi.php**
  1. Ubah konten aplikasi (visi, misi, sejarah dll) di folder /konten atau kembalikan dari file cadangan/backup sebelumnya.
  1. PSBOnline siap digunakan