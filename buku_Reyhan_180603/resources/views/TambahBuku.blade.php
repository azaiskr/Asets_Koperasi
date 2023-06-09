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
        Kategori <input type="text" name="IDKategori" required="required"> <br/>
        Penulis <input type="text" name="IDPenulis" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>