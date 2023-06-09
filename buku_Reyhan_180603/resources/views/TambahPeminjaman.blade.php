<!DOCTYPE html>
<html>
<head>
	<title>Tambah Peminjaman</title>
</head>
<body>
	<h3>Tambah</h3>
 
	<a href="/peminjaman"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/peminjaman/store" method="post">
		{{ csrf_field() }}
		Nama Peminjam <input type="text" name="NamaPeminjam" required="required"> <br/>
        Judul Buku<select name="IDBuku">
            @foreach($buku as $b)
                    <option value="{{ $b->IDBuku }}">{{ $b->Judul }}</option>
            @endforeach
        </select><br/>
        Tanggal Pengembalian <input type="date" name="TanggalPengembalian" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>