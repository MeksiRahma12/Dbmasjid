<?php
include(“koneksi.php");
?>
<html>
 <head>
 <title>INPUT PENJUALAN</title>
<script>
 function hitung() {
 interval = setInterval("cari_hrg_jual()", 1);
 }
 function cari_hrg_jual() {
 jml = document.frmbarang.hargabeli.value;
 hrg = (0.1 * jml);
 document.frmbarang.hargajual.value = parseInt(jml)+parseInt(hrg);
 }
 function stopCalc() {
 clearInterval(interval);
 }
</script>
 <center>
 <table width="473" border="1" >
 <tr>
 <td width="567"><div align="left">
 <p class="judulutama">
 <center>ENTRY DATA BARANG</center></p>
 <hr>
 <form enctype="multipart/form-data" method="post"
action="prosestambah.php" name="frmbarang" id="frmbarang" ">
 <table width="400" border="0" align="left" id="biodata">
 <tr>
 <td width="350">Kode Barang</td>
 <td width="305"><input name="kode" id="xkode" type="text" size="35"
maxlength="30"/></td>
 </tr>
 <tr>
 <td width="250">Nama Barang</td>
 <td><input name="nama" id="nama" type="xtext" size="35"
maxlength="30"/></td>
 </tr>
<tr>
 <td width="250">Satuan</td>
 <td width="305"><input name="satuan" id="xsatuan" type="text"
size="35" maxlength="30"/></td>
 </tr>
 <tr>
 <td width="250">Harga Beli</td>
 <td width="305"><input name="hargabeli" id="xhargabeli"
type="text" size="35" maxlength="30" onfocus="hitung();" /></td>
 </tr>
 <tr>
 <td width="250">Harga Jual</td>
 <td width="305"><input readonly="" name="hargajual"
id="xhargajual" type="text" size="35" maxlength="30"
onchange='tryNumberFormat(this.form.thirdBox);'/></td>
 </tr>
 <tr>
 <td width="250">Stok Barang</td>
 <td width="305"><input name="stok" id="xstok" type="text"
size="35" maxlength="30"/></td>
 </tr>
 <tr>
 <td></td>
 <td>
 <input type="submit" name="Submit" value=" SIMPAN " />
 <input type="reset" name="batal" value=" BATAL "/>
 <input type="button" name="keluar" value=" KELUAR "
onClick="location.href=('home.php')"/>

 </td>
 </tr>
 </table>
 </form>
 </div></td>
 </tr>
 </table>
 </center>
</div>
</body>
</html>
