<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($aset_pengalihan as $ap)
    <form action="/AsetPengalihan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id_Aset" value="{{ $ap->id_Aset }}" > <br/>
        Nama <input type="text" name="nama_Aset" required="required" value="{{ $ap->nama_Aset }}"> <br/>
		Jenis Pengalihan <input type="text" name="jenis_Pengalihan" required="required" value="{{ $ap->jenis_Pengalihan }}"> <br/>
		Jumlah <input type="number" name="jumlah" required="required"value="{{ $ap->jumlah }}" > <br/>
		Lokasi Pengalihan <input type="text" name="lokasi_Pengalihan" required="required" value="{{ $ap->lokasi_Pengalihan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endforeach
</body>
</html>