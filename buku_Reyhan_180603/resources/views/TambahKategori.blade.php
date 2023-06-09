<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kategori</title>
</head>
<body>
	<h3>Tambah</h3>
 
	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/kategori/store" method="post">
		{{ csrf_field() }}
		ID Kategori <input type="text" name="IDKategori" required="required"> <br/>
		Nama Kategori <input type="text" name="NamaKategori" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>