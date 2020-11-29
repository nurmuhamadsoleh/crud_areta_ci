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
    <p><b>Daftar Mahasiswa</b></p>
    <?php echo form_open('calon_mahasiswa/update'); ?>
	<table align="center" border="1px">
		<tr>
			<td>No. Pendaftaran</td>
			<td><input type="text" name="no_pendaftaran" value="<?php echo $edit['no_pendaftaran'] ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="tempat_lahir" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tgl_lahir"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jenis_kelamin" value="L" >Laki Laki
				<input type="radio" name="jenis_kelamin" value="P">Perempuan
					</td>
		</tr>
				
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" required></textarea></td>
		</tr>
		<tr>
			<td>No.Telp</td>
			<td><input type="text" name="no_telpon" required></td>
					</td>
		</tr>
		<tr>
			<td>Agama </td>
			<td><select name="id_agama">
				<?php foreach ( $agama as $key => $value) { ?> 
					<option value="<?php echo $value->id_agama ?>">
						<?php echo $value->nama_agama ?>
							</option>
				<?php } ?>
				</select> </td>
		</tr>
		<tr>
			
			<td> Email </td>
			<td><input type="text" name="email" required></td>
			
		</tr>
		<tr>
			<td>Jurusan </td>
			<td><select name="id_jurusan">
				<?php foreach ( $jurusan as $key => $value) { ?> 
					<option value="<?php echo $value->kode_jurusan ?>">
						<?php echo $value->nama_jurusan ?>
							</option>
				<?php } ?>
				</select> </td>
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
