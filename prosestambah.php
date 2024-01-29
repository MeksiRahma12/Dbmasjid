<?php
include("koneksi.php");
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$hargabeli = $_POST['hargabeli'];
$hargajual = $_POST['hargajual'];
$stok = $_POST['stok'];
$sql_tambah_barang = "INSERT INTO barang
VALUES('$kode','$nama','$satuan','$hargabeli','$hargajual','$stok')";
$tambahbarang = mysql_query($sql_tambah_barang);
if ($tambahbarang) {
 header("location:home.php?");
} else {
 echo "Gagal Tambah Barang";
}