Yang Harus dikonfigurasi

#Database
Import discup_iit.sql ke phpmyadmin

#CodeIgniter Database Configuration
buka file 'database.php' di folder application/config/
sesuaikan dengan konfigurasi database mysql pada phpmyadmin

#Responsive FileManager
buka file 'config.php' pada folder filemanager/config/
edit pada line 25. Di sini Anda akan menemukan variable $folder_host = '/iit'
Sesuaikan isi variable tersebut...
Contoh jika web ditaruh pada alamat "http://localhost/iit" maka
	$folder_host = '/iit' (harus dengan awalan '/' dan akhiran tanpa '/')

Jika web terletak di folder root contoh letak di 'http://localhost'
maka kosongkan varible tersebut :
	$folder_host = ''

#Halaman Admin
untuk masuk halaman admin masuk ke <host>/admin
	username : admin
	password : admin