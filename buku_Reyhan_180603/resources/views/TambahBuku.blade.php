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
 
	<form action="/buku/store" method="post">
		{{ csrf_field() }}
		ID Buku <input type="text" name="IDBuku" required="required"> <br/>
		Nama Buku <input type="text" name="Judul" required="required"> <br/>
        Penerbit <input type="text" name="Penerbit" required="required"> <br/>
        Tahun Terbit <input type="date" name="TahunTerbit" required="required"> <br/>
        Stok <input type="number" name="JumlahStok" required="required"> <br/>
        DendaBuku <input type="number" name="DendaBuku" required="required"> <br/>
        Kategori <select name="IDKategori">
        @foreach($kategori as $k)
                <option value="{{ $k->IDKategori }}">{{ $k->NamaKategori }}</option>
        @endforeach
        </select><br/>
        Penulis <select name="IDPenulis">
        @foreach($penulis as $p)
                <option value="{{ $p->IDPenulis }}">{{ $p->NamaPenulis }}</option>
        @endforeach
        </select><br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>