<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
</head>
<body>
	<h2>Data Kategori</h2>
 
	<a href="/kategori/tambah"> + Tambah</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID Buku</th>
			<th>Nama Buku</th>
		</tr>
		@foreach($kategori as $k)
		<tr>
			<td>{{ $k->IDKategori }}</td>
			<td>{{ $k->NamaKategori }}</td>
			<td>
			    <a href="/kategori/edit/{{ $k->IDKategori }}">Edit</a>
				|
				<a href="/kategori/hapus/{{ $k->IDKategori }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>