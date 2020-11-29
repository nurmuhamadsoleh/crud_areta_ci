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
    <p><b>Edit Agama</b></p>
    <?php echo form_open('agama/update'); ?>
	<table align="center" border="1px">
		<tr>
			<td style="border:hidden;"><input type="hidden" name="id_agama" value="<?php echo $edit['id_agama'] ?>" required></td></td>
		</tr>
		<tr>
			<td>Nama agama</td>
			<td><input type="text" name="nama_agama" required></td>
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