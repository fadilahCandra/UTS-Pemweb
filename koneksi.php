<?php
//buat koneksi dengan MySQL
$link=mysql_connect("localhost", "root", "", "quran");
   
//jika koneksi gagal, langsung keluar dari PHP
if (!$link)
{
   die("Koneksi dengan MySQL gagal");
}
   
//gunakan database alquran
$result=mysql_query('use idquranw_id');
if (!$result)
{
   die("hey");
}
//tampilkan tabel mahasiswa_ilkom
$result=mysql_query('SELECT * FROM visitor');
?>