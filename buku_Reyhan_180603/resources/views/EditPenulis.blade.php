<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Edit Penulis</h3>
 
	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($penulis as $p)
	<form action="/penulis/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="IDPenulis" value="{{ $p->IDPenulis }}"> <br/>
		Nama <input type="text" required="required" name="NamaPenulis" value="{{ $p->NamaPenulis }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>