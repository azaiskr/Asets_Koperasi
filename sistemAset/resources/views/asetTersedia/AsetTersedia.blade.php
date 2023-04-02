<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aset Tersedia</h1>

    <button class="btn btn-primary"><a href="/tambahAset">Tambah Data</a></button>
    

    <table border="1">
		<tr>
			<th>ID ASET</th>
			<th>NAMA ASET</th>
			<th>STOK</th>
		</tr>
		@foreach($aset_tersedia as $at)
		<tr>
			<td>{{ $at->id_aset }}</td>
            <td>{{ $at->nama_aset }}</td>
            <td>{{ $at->stok }}</td>
			<td>
				<button class="btn btn-primary"><a href="/AsetTetap/edit/{{$at->id_aset}}">Edit</a></button>
				<button class="btn btn-primary"><a href="/AsetTetap/hapus/{{$at->id_aset}}">Hapus</a></button>
			</td>
		</tr>
		@endforeach
	</table>

	<a href="/">Home</a>
</body>
</html>