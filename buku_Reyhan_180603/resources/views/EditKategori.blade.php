<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Edit Kategori</h3>
 
	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($kategori as $k)
	<form action="/kategori/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="IDKategori" value="{{ $k->IDKategori }}"> <br/>
		Nama <input type="text" required="required" name="NamaKategori" value="{{ $k->NamaKategori }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>