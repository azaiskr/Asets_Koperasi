<!DOCTYPE html>
<html>
<head>
	<title>Buku</title>
</head>
<body>
 
	<h3>Data Buku</h3>
 
	<a href="/buku/tambah"> + Tambah Buku Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID Buku</th>
			<th>Judul</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Denda</th>
            <th>Kategori</th>
			<th>Penulis</th>
		</tr>
		@foreach($buku as $b)
		<tr>
			<td>{{ $b->IDBuku }}</td>
			<td>{{ $b->Judul }}</td>
			<td>{{ $b->Penerbit }}</td>
			<td>{{ $b->TahunTerbit }}</td>
            <td>{{ $b->JumlahStok }}</td>
            <td>{{ $b->DendaBuku }}</td>
            <td>{{ $b->IDKategori }}</td>
            <td>{{ $b->IDPenulis }}</td>
			<td>
				<a href="/buku/edit/{{ $b->IDBuku }}">Edit</a>
				|
				<a href="/buku/hapus/{{ $b->IDBuku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>