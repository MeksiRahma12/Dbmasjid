<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "dbpenjualan";
$connect = mysql_connect($host, $username, $password);
mysql_select_db($database, $connect) or Die("Gagal Koneksi ke Database");
?>