<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aset Terpinjam</h1>

    <button class="btn btn-primary"><a href="/tambahTerpinjam">Tambah Data</a></button>
    

    <table border="1">
		<tr>
			<th>ID ASET</th>
			<th>NAMA ASET</th>
			<th>PEMINJAM</th>
			<th>JUMLAH</th>
			<th>TANGGAL PINJAMAN</th>
			<th>TANGGAL TEMPO PENGEMBALIAN</th>
		</tr>
		@foreach($aset_terpinjam as $at)
		<tr>
			<td>{{ $at->id_aset }}</td>
            <td>{{ $at->nama_aset }}</td>
            <td>{{ $at->nama_peminjam }}</td>
            <td>{{ $at->jumlah_pinjaman }}</td>
            <td>{{ $at->tanggal_pinjaman }}</td>
			<td>{{ $at->tanggal_jatuh_tempo }}</td>
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