<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aset Tetap</h1>

    <button class="btn btn-primary"><a href="/tambahAset">Tambah Data</a></button>
    

    <table border="1">
		<tr>
			<th>ID ASET</th>
			<th>NAMA ASET</th>
			<th>LOKASI</th>
			<th>KONDISI</th>
			<th>JUMLAH</th>
			<th>UKURAN</th>
			<th>NILAI EKONOMI</th>
            <th>OPSI</th>
		</tr>
		@foreach($aset_tetaps as $at)
		<tr>
			<td>{{ $at->id_Aset }}</td>
            <td>{{ $at->nama_Aset }}</td>
            <td>{{ $at->lokasi }}</td>
            <td>{{ $at->kondisi }}</td>
            <td>{{ $at->jumlah }}</td>
			<td>{{ $at->ukuran }}</td>
			<td>Rp{{ $at->nilai_ekonomi }}</td>
			<td>
				<button class="btn btn-primary"><a href="/AsetTetap/edit/{{$at->id_Aset}}">Edit</a></button>
				<button class="btn btn-primary"><a href="/AsetTetap/hapus/{{$at->id_Aset}}">Hapus</a></button>
			</td>
		</tr>
		@endforeach
	</table>

	<a href="/">Home</a>
</body>
</html>