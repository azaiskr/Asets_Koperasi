<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Perpustakaan</title>
</head>
<body>
{{-- <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="aset_jual_beli"> Daftar Aset Pengalihan </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Input Data Buku </h3>
            <form action="/tambah" method="post">
                @csrf
                <div class="form">
                    <label for="IDBuku"> <h5> ID Buku </h5> </label>
                    <input class="form-control" type="number" name="IDBuku" required="required" placeholder="">
                    @if ($errors->has('IDBuku'))
                        <div class="text-danger">
                            {{$errors->first('IDBuku')}}
                        </div>
                    @endif
                <div class="form">
                    <label for="Judul"> <h5> Judul </h5> </label>
                    <input class="form-control" type="text" name="Judul" required="required" placeholder="">
                    @if ($errors->has('Judul'))
                        <div class="text-danger">
                            {{$errors->first('Judul')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="Penulis"> <h5> Penulis </h5> </label>
                    <input class="form-control" type="text" name="Penulis" required="required" placeholder="">

                    @if ($errors->has('Penulis'))
                        <div class="text-danger">
                            {{$errors->first('Penulis')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="Penerbit"> <h5> Penerbit </h5> </label>
                    <input class="form-control" type="text" name="Penerbit" required="required" placeholder="">
                    @if ($errors->has('Penerbit'))
                        <div class="text-danger">
                            {{$errors->first('Penerbit')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="TahunTerbit"> <h5> Tahun Terbit </h5> </label>
                    <input class="form-control" type="number" name="TahunTerbit" required="required" placeholder="">
                    @if ($errors->has('TahunTerbit'))
                        <div class="text-danger">
                            {{$errors->first('TahunTerbit')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="JumlahStok"> <h5> Jumlah Stok </h5> </label>
                    <input class="form-control" type="number" name="JumlahStok" required="required" placeholder="">
                    @if ($errors->has('JumlahStok'))
                        <div class="text-danger">
                            {{$errors->first('JumlahStok')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="DendaBuku"> <h5> Denda Buku </h5> </label>
                    <input class="form-control" type="number" name="DendaBuku" required="required" placeholder="">
                    @if ($errors->has('DendaBuku'))
                        <div class="text-danger">
                            {{$errors->first('DendaBuku')}}
                        </div>
                    @endif
                </div>

                <div class="form-group float-right">
                    <button class="btn-danger" type="reset"> Reset </button>
                    <button class="btn-success" type="sumbit"> OK </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>