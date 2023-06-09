<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
</head>
<body>
	<h3>Tambah</h3>
 
	<a href="/buku"> Kembali</a>
	
	<br/>
	<br/>
    @foreach($buku as $b)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="IDBuku" value="{{ $b->IDBuku }}"> <br/>
		Judul <input type="text" required="required" name="Judul" value="{{ $b->Judul }}"> <br/>
        Penerbit <input type="text" required="required" name="Penerbit" value="{{ $b->Penerbit }}"> <br/>
        Tahun Terbit <input type="date" required="required" name="TahunTerbit" value="{{ $b->TahunTerbit }}"> <br/>
        Stok <input type="number" required="required" name="JumlahStok" value="{{ $b->JumlahStok }}"> <br/>
        Denda Buku <input type="number" required="required" name="DendaBuku" value="{{ $b->DendaBuku }}"> <br/>
        Kategori <select name="IDKategori">
        @foreach($kategori as $k)
            @if($b->IDKategori == $k->IDKategori)
                <option value="{{ $k->IDKategori }}">{{ $k->NamaKategori }}</option>
            @endif
        @endforeach
        </select><br/>
        Penulis <select name="IDPenulis">
        @foreach($penulis as $p)
            @if($b->IDPenulis == $p->IDPenulis)
                <option value="{{ $p->IDPenulis }}">{{ $p->NamaPenulis }}</option>
            @endif
        @endforeach
        </select><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach 
 
</body>
</html>