<!DOCTYPE html>
<html>
<head>
	<title>Tambah Penulis</title>
</head>
<body>
	<h3>Tambah</h3>
 
	<a href="/penulis"> Kembali</a>
 
	<form action="/penulis/store" method="post">
		{{ csrf_field() }}
		ID Penulis <input type="text" name="IDPenulis" required="required"> <br/>
		Nama Penulis <input type="text" name="NamaPenulis" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>