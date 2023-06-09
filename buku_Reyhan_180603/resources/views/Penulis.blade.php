<!DOCTYPE html>
<html>
<head>
	<title>Penulis</title>
</head>
<body>
	<h2>Data Penulis</h2>
 
	<a href="/penulis/tambah"> + Tambah</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID Buku</th>
			<th>Nama Buku</th>
		</tr>
		@foreach($penulis as $p)
		<tr>
			<td>{{ $p->IDPenulis }}</td>
			<td>{{ $p->NamaPenulis }}</td>
			<td>
			    <a href="/penulis/edit/{{ $p->IDPenulis }}">Edit</a>
				|
				<a href="/penulis/hapus/{{ $p->IDPenulis }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>