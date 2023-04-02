<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($aset_terpinjam as $at)
    <form action="/AsetTerpinjam/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id_aset" value="{{ $at->id_aset }}"> <br/>
        Nama <input type="text" name="nama_aset" required="required" value="{{ $at->nama_aset }}"> <br/>
		Stok <input type="text" name="stok" required="required" value="{{ $at->stok }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endforeach
</body>
</html>