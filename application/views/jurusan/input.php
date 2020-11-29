<!DOCTYPE html>
<head>
    <title></title>
</head>
<style type="text/css">
			p {
				text-align: center;
				font-size: 20px;
			}
</style>
<body>
    <p><b>DAFTAR jurusan</b></p>
    <?php echo form_open('jurusan/save'); ?>
	<table align="center" border="1px">
		<tr>
			<td>Kode jurusan</td>
			<td><input type="text" name="kode_jurusan" required></td></td>
		</tr>
		<tr>
			<td>Nama jurusan</td>
			<td><input type="text" name="nama_jurusan" required></td>
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