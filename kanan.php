<!DOCTYPE html>
<html>
<head>
	<title>Sidebar</title>
</head>
<body background="daun.jpg"> 
	<audio loop="" hidden="" controls="" autoplay="">
	  <source src="lily.mp3" type="audio/mp3">
	Your browser does not support the audio element.
	</audio>
	<h3 align="center">
	Keritik Dan Saran
	</h3>
	<form method="POST">
		<table border="0" cellpadding="7" align="center">
		<tr>
			
			<td><textarea name="keritik" required=""></textarea></td>
		</tr>
			
			<tr>
				<td colspan="100" rowspan="50" align="center">
					<input type="submit" name="proses" value="Kirim">
				</td>
			</tr>
		</table>
	</form>
	<?php  
	if (isset($_POST['proses'])) {
		$a = $_POST['keritik'];

	?>
		<br>
		<hr>
			<h5>Permintaan Telah Di-Kirim</h5>
			<h5>Keritik Dan Saran : <?=$a?></h5>
			
	<?php	
	}
	?>
</body>
</html>