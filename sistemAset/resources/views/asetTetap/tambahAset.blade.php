<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/AsetTetap/store" method="post">
		{{ csrf_field() }}
        Nama <input type="text" name="nama_Aset" required="required"> <br/>
		Lokasi <input type="text" name="lokasi" required="required" > <br/>
		Kondisi <input type="text" name="kondisi" required="required" > <br/>
		Jumlah <input type="number" name="jumlah" required="required" > <br/>
        Ukuran <input type="number" name="ukuran" required="required" > <br/>
        Nilai Ekonomi <input type="number" name="nilai_ekonomi" required="required" > <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>