<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'pengarang';

$koneksi=mysql_connect($hostname, $username, $password) or DIE('Koneksi Gagal');
mysql_select_db($dbname) or DIE('Database Belum Tersedia!!!');

?>