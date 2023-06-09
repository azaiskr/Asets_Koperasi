<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman</title>
</head>
<body>
	<h2>Data Peminjaman</h2>
 
	<a href="/peminjaman/tambah"> + Tambah</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama Peminjam</th>
            <th>Nama Buku</th>
            <th>Tanggal Pengembalian</th>
		</tr>
		@foreach($peminjaman as $p)
		<tr>
			<td>{{ $p->IDPeminjaman }}</td>
			<td>{{ $p->NamaPeminjam }}</td>
            <td>{{ $p->IDBuku }}</td>
			<td>{{ $p->TanggalPengembalian }}</td>
			<td>
			    <a href="/peminjaman/edit/{{ $p->IDPeminjaman }}">Edit</a>
				|
				<a href="/peminjaman/hapus/{{ $p->IDPeminjaman }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>