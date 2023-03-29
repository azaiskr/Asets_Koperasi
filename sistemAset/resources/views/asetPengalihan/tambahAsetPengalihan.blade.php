<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/AsetPengalihan/store" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id_Aset" > <br/>
        Nama <input type="text" name="nama_Aset" required="required"> <br/>
		Jenis Pengalihan <input type="text" name="jenis_Pengalihan" required="required" > <br/>
		Jumlah <input type="number" name="jumlah" required="required" > <br/>
		Lokasi Pengalihan <input type="text" name="lokasi_Pengalihan" required="required" > <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>