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
    <p><b>DAFTAR dosen</b></p>
    <?php echo form_open('dosen/update'); ?>
	<table align="center" border="1px">
		<tr>
			<td>NIK</td>
			<td><input type="text" name="nik" value="<?php echo $edit['nik'] ?>" readonly></td></td>
		</tr>
		<tr>
			<td>Kode Dosen</td>
			<td><input type="text" name="kode_dosen" required></td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td><input type="text" name="nama_dosen" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jenis_kelamin" value="L" >Laki Laki
				<input type="radio" name="jenis_kelamin" value="P">Perempuan
					</td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" required></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="radio" name="status" value="Aktif" >Aktif
				<input type="radio" name="status" value="Pasif">Pasif
					</td>
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