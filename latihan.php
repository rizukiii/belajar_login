<?php 
// fungsi yang digunakan untuk memulai session /mengaktifkannya
session_start();


$nama = "rizqy";

// adalah variable array yang digunakan untuk mengakses kunci dan data yang disimpan
// karakter yang ada di dalam araay session adalah kunci yang digunakan untuk mendefinisikan penamaan variable di dalam penyimpanan session
// karakter yang berada setelah '=' adalah nilai dari data yang akan disimpan di penyimpanan session
$_SESSION['nama'] = "rizqy";

// jika ingin mengakses data maka kta perlu memanggil kunci didalam variable array $_SESSION
echo $nama;
echo "<br>";
echo $_SESSION['nama'];