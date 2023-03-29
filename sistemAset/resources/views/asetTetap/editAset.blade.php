<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($aset_tetaps as $at)
    <form action="/AsetTetap/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id_Aset" value="{{ $at->id_Aset }}"> <br/>
        Nama <input type="text" name="nama_Aset" required="required" value="{{ $at->nama_Aset }}"> <br/>
		Lokasi <input type="text" name="lokasi" required="required" value="{{ $at->lokasi }}"> <br/>
		Kondisi <input type="text" name="kondisi" required="required" value="{{ $at->kondisi }}"> <br/>
		Jumlah <input type="number" name="jumlah" required="required" value="{{ $at->jumlah }}"> <br/>
        Ukuran <input type="number" name="ukuran" required="required" value="{{ $at->ukuran }}"> <br/>
        Nilai Ekonomi <input type="number" name="nilai_ekonomi" required="required" value="{{ $at->nilai_ekonomi }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endforeach
</body>
</html>