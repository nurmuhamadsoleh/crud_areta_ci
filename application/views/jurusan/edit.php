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
    <p><b>DAFTAR JURUSAN</b></p>
    <?php echo form_open('jurusan/update'); ?>
	<table align="center" border="1px">
		<tr>
			<td>Kode Jurusan</td>
			<td><input type="text" name="kode_jurusan" value="<?php echo $edit['kode_jurusan'] ?>" readonly></td></td>
		</tr>
		<tr>
			<td>Nama Jurusan</td>
			<td><input type="text" name="nama_jurusan" required></td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Update">
				<input type="reset" value="BATAL">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</body>
</html>