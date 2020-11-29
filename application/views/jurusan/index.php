<!DOCTYPE html>
<html>
    <head>
        <title> Halaman Awal Jurusan </title>
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h1 class="header">Jurusan</h1>
	<table border="1" style="border-collapse: collapse;" align="center" style="text-align: center;">
		<tr>
			<th>
				No
			</th>
			<th>
				Nama Jurusan
			</th>
			<th colspan="2">
				Aksi
			</th>
        </tr>
        <tr>
        <?php
			foreach($tampil as $key => $value)
				{
						echo 
						" 
						<tr>
						<td>".$value->kode_jurusan."</td>
						<td>".$value->nama_jurusan."</td>
						<td>".anchor('jurusan/delete/'.$value->kode_jurusan,'Delete')."</td>
						<td>".anchor('jurusan/edit/'.$value->kode_jurusan,'Edit')."</td>
						</tr>
						";
				}
            ?>
        </tr>
    </table>
        <a style="text-align: center;" href='jurusan/input'>Input</a>
    </body>
</html>