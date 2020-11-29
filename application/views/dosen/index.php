<!DOCTYPE html>
<html>
    <head>
        <title> Halaman Awal dosen </title>
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h1 class="header">dosen</h1>
	<table border="1" style="border-collapse: collapse;" align="center" style="text-align: center;">
		<tr>
			<th>
				NIK
			</th>
			<th>
				Kode dosen
			</th>
			<th>
				Nama dosen
			</th>
			<th>
				Jenis Kelamin
			</th>
			<th>
				Email
			</th>
			<th>
				Status
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
						<td>".$value->nik."</td>
						<td>".$value->kode_dosen."</td>
						<td>".$value->nama_dosen."</td>
						<td>".$value->jenis_kelamin."</td>
						<td>".$value->email."</td>
						<td>".$value->status."</td>
						<td>".anchor('dosen/delete/'.$value->nik,'Delete')."</td>
						<td>".anchor('dosen/edit/'.$value->nik,'Edit')."</td>
						</tr>
						";
				}
            ?>
        </tr>
    </table>
        <a style="text-align: center;" href='dosen/input'>Input</a>
    </body>
</html>