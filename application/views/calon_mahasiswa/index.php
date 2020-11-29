<!DOCTYPE html>
<html>
    <head>
        <title> Calon Mahasiswa</title>
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h1 class="header">Calon Mahasiswa</h1>
	<table border="1" style="border-collapse: collapse;" align="center" style="text-align: center;">
		<tr>
			<th>
				No Pendaftaran
			</th>
			<th>
				Nama
			</th>
			<th>
				Tempat Lahir
			</th>
			<th>
				Tanggal Lahir
			</th>
			<th>
				Jenis Kelamin
			</th>
			<th>
				Alamat
			</th>
			<th>
				No Telepon
			</th>
			<th>
				Agama
			</th>
			<th>
				Email
			</th>
			<th>
				Jurusan
			</th>
			<th colspan="2">
				Aksi
			</th>
        </tr>
        <tr>
		<?php
			foreach($tampil as $key => $value)
				{
					if($value->jenis_kelamin == "L")
					{
						$value->jenis_kelamin = "Laki-Laki";
					}
					else
					{
						$value->jenis_kelamin = "Perempuan";
					}
						echo 
						" 
						<tr>
						<td>".$value->no_pendaftaran."</td>
						<td>".$value->nama."</td>
						<td>".$value->tempat_lahir."</td>
						<td>".$value->tgl_lahir."</td>
						<td>".$value->jenis_kelamin."</td>
						<td>".$value->alamat."</td>
						<td>".$value->no_telpon."</td>
						<td>".$value->nama_agama."</td>
						<td>".$value->email."</td>
						<td>".$value->nama_jurusan."</td>
						<td>".anchor('calon_mahasiswa/delete/'.$value->no_pendaftaran,'Delete')."</td>
						<td>".anchor('calon_mahasiswa/edit/'.$value->no_pendaftaran,'Edit')."</td>
						</tr>
						";
				}
            ?>
        </tr>
    </table>
        <a style="text-align: center;" href='calon_mahasiswa/input'>Input</a>
    </body>
</html>