<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aset Pengalihan</h1>

    <button class="btn btn-primary"><a href="/tambahAsetPengalihan">Tambah Data</a></button>
    

    <table border="1">
		<tr>
			<th>ID ASET</th>
			<th>NAMA ASET</th>
			<th>JENIS PENGALIHAN</th>
			<th>JUMLAH</th>
			<th>LOKASI PENGALIHAN</th>
            <th>OPSI</th>
		</tr>
		@foreach($aset_pengalihan as $ap)
		<tr>
			<td>{{ $ap->id_Aset }}</td>
            <td>{{ $ap->nama_Aset }}</td>
            <td>{{ $ap->jenis_Pengalihan }}</td>
            <td>{{ $ap->jumlah }}</td>
            <td>{{ $ap->lokasi_Pengalihan }}</td>
			<td>
				<button class="btn btn-primary"><a href="/AsetPengalihan/edit/{{$ap->id_Aset}}">Edit</a></button>
				<button class="btn btn-primary"><a href="/AsetPengalihan/hapus/{{$ap->id_Aset}}">Hapus</a></button>
			</td>
		</tr>
		@endforeach
	</table>

	<a href="/">Home</a>
</body>
</html>