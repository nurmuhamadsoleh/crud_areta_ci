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
    <p><b>Daftarkan Agama yang blum Tersedia</b></p>
    <?php echo form_open('agama/save'); ?>
	<table align="center" border="1px">
		<tr>
			<td>Id Agama</td>
			<td><input type="text" name="id_agama" required></td></td>
		</tr>
		<tr>
			<td>Nama Agama</td>
			<td><input type="text" name="nama_agama" required></td>
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