<!DOCTYPE html>
<html>
<head>
	<title>pembelian</title>
</head>
<body background="biru1.jpg">
<h4 align="center"> Pesan Sekarang<br></h4>
<form method="post">
	<table border="0" cellpadding="5" cellpadding="10" align="center">
		<tr>
			<td>Masukan Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" required=""></td>
		</tr>
		<tr>
			<td>Barang</td>
			<td>:</td>
			<td>
				<select name="Barang" required="">
					<option value="">-Pilih-</option>
					<option value="ATCION FIGURE">ACTION FIGURE</option>
					<option value="GANTUNGAN">GANTUNGAN</option>
					<option value="PAPER CLIP">PAPER CLIP</option>
					<option value="GUNTING KUKU">GUNTING KUKU</option>
					<option value="KABEL DATA">KABEL DATA</option>
					<option value="PULPEN">PULPEN</option>
					<option value="TAS">TAS</option>
					<option value="LAMPU TIDUR">LAMPU TIDUR</option>
					<option value="KIPAS">KIPAS</option>
					<option value="BANTAL LEHER STITCH KUPING">BANTAL LEHER STITCH LEHER </option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jumlah Beli</td>
			<td>:</td>
			<td><input type="number" name="jumlah" required="" min="0"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" required=""></textarea></td>
		</tr>
		<tr>
			<td colspan="3" align="center">
				<input type="submit" name="beli" value="Beli Sekarang">
			</td>
		</tr>
	</table>
	   <h3 align="center">Silahkan Lakukan Pembayaran Ke Rek.Bank Bri 009-023-7862-123</h3>

</form>
<?php  
	if (isset($_POST['beli'])) {
		$a = $_POST['nama'];
		$b = $_POST['Barang'];
		if($b=="ATCION FIGURE"){
			$harga =40000;
		}elseif($b=="GANTUGAN"){
			$harga=10000;
		}elseif ($b=="PAPER CLIP"){
			$harga=7500;
		}elseif ($b=="KABEL DATA"){
			$harga=15000;
		}elseif ($b=="GUNTING KUKU"){
			$harga=17000;
		}elseif ($b=="PULPEN"){
			$harga=9000;
		}elseif ($b=="TAS"){
			$harga=60000;
		}elseif ($b=="LAMPU TIDUR"){
			$harga=100000;
		}elseif ($b=="KIPAS"){
			$harga=60000;
		}elseif ($b=="BANTAL LEHER STITCH KUPING"){
			$harga=70000;
		}

		$c = $_POST['jumlah'];

		$total = $c*$harga;

	?>
		<h5 align="center">
			Pembelian Anda Akan Kami Proses Terima Kasih ! <br>
			Nama : <?=$a?> <br>
			Barang : <?=$b?><br>
			Harga :Rp. <?=$harga?><br>
			Banyak Pembelian : <?=$c?><br>
			Total Bayar :Rp. <?=$total?><br>
		</h5>
	<?php
	}                                       
?>
</body>
</html>