<!DOCTYPE html>
<html>
    <head>
        <title> Daftar Agama yang Tersedia saat ini</title>
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h1 class="header">Daftar Agama</h1>
	<table border="1" style="border-collapse: collapse;" align="center" style="text-align: center;">
		<tr>
			<th>
				Id
			</th>
			<th>
				Nama Agama
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
						<td>".$value->id_agama."</td>
						<td>".$value->nama_agama."</td>
						<td>".anchor('agama/delete/'.$value->id_agama,'Delete')."</td>
						<td>".anchor('agama/edit/'.$value->id_agama,'Edit')."</td>
						</tr>
						";
				}
            ?>
        </tr>
	</table>
	<br><br>
        <div style="text-align: center;" ><a href='agama/input'>Input</a></div>
    </body>
</html>