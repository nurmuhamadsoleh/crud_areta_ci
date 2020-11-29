<!DOCTYPE html>
<head>
<title></title>
</head>
<body>
	<?php echo form_open('siswa/proses'); ?>
	<table align="center" border="1px">
		<tr>
			<td style="text-align: center">INPUTAN MBOK</td>
		<tr>
			<td>Nama</td> 
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" required></textarea></td>
		</tr>
		<tr>
			<td>No.HP</td>
			<td><input type="text" name="phoneNumber" required></td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="SIMPAN">
				<input type="reset" value="BATAL">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</body>
</html>
