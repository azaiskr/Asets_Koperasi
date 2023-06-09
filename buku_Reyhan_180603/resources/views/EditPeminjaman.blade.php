<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Edit Peminjaman</h3>
 
	<a href="/peminjaman"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($peminjaman as $p)
	<form action="/peminjaman/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="IDPeminjaman" value="{{ $p->IDPeminjaman }}"> <br/>
		Nama Peminjam <input type="text" required="required" name="NamaPeminjam" value="{{ $p->NamaPeminjam }}"> <br/>
        Judul Buku <select name="IDBuku">
        @foreach($buku as $b)
            @if($p->IDBuku == $b->IDBuku)
                <option value="{{ $b->IDBuku }}">{{ $b->Judul }}</option>
            @endif
        @endforeach
        </select><br/>
        Tanggal Pengembalian <input type="date" required="required" name="TanggalPengembalian" value="{{ $p->TanggalPengembalian }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>