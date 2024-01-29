<title>INPUT PENJUALAN</title>
<?php
 include("koneksi.php");
 $sql_view = mysql_query("SELECT * FROM barang ORDER BY kodebarang ASC");
 $total = mysql_num_rows($sql_view);
 echo"<br><br>
<center><font size=+2>DATA BARANG</font><br><br>
<br><br></center>
 <center>
<table width='700' border='1' align='center' class='tengahbiodata'>"
?>
<input type="button" name="tambah" value=" TAMBAH DATA "
onClick="location.href=('tambah.php')"/>
<?php
 echo"<tr>
 <th width='100'scope='col'>Kode Barang</th>
 <th width='200'scope='col'>Nama Barang</th>
 <th width='100'scope='col'>Satuan</th>
 <th width='100'scope='col'>Harga Beli</th>
 <th width='100'scope='col'>Harga Jual</th>
 <th width='100'scope='col'>Stok</th>
 <th width='100'scope='col'>Aksi</th>
 </tr>";
 while ($data = mysql_fetch_array($sql_view)) {
 echo "<tr>";
 echo "<td>$data[kodebarang] </td>";
 echo "<td>$data[namabarang] </td>";
 echo "<td>$data[satuan] </td>";
 echo "<td>$data[hargabeli]</td>";
 echo "<td>$data[hargajual]</td>";
 echo "<td>$data[stok] </td>";
 echo"<td><a href = edit.php?kode=$data[kodebarang]> Edit</a> |
<a href=hapus.php?kode=$data[kodebarang] >Hapus</a></td></tr></td>";
 }
 echo "</table>";
 print("Jumlah Data : $total")
 ?>
