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
            <li class="breadcrumb-item"><a href="aset_jual_beli"> Daftar Aset Jual Beli </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Buku </h3>
            <form action="/update" method="get">
                @csrf
                @foreach($buku as $b)
                <div class="form">
                    <label for="IDBuku"> </label>
                    <input class="form-control" type="text" name="IDBuku" required="required" value="{{ $b->IDBuku }}" >
                    @if ($errors->has('IDBuku'))
                        <div class="text-danger">
                            {{$errors->first('IDBuku')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="Judul"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="Judul" required="required" value="{{ $b->Judul }}">
                    @if ($errors->has('Judul'))
                        <div class="text-danger">
                            {{$errors->first('Judul')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="Penulis"> <h5> Stok </h5> </label>
                    <input class="form-control" type="number" name="Penulis" required="required" value="{{ $b->stok }}"> 
                    @if ($errors->has('Penulis'))
                        <div class="text-danger">
                            {{$errors->first('Penulis')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="Penerbit"> <h5> Nilai Ekonomi </h5> </label>
                    <input class="form-control" type="number" name="Penerbit" required="required" value="{{ $b->Penerbit }}">
                    @if ($errors->has('Penerbit'))
                        <div class="text-danger">
                            {{$errors->first('Penerbit')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="TahunTerbit"> <h5> Lokasi </h5> </label>
                    <input class="form-control" type="text" name="TahunTerbit" required="required" value="{{ $b->TahunTerbit }}">
                    @if ($errors->has('TahunTerbit'))
                        <div class="text-danger">
                            {{$errors->first('TahunTerbit')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="JumlahStok"> <h5> Nilai Ekonomi </h5> </label>
                    <input class="form-control" type="number" name="JumlahStok" required="required" value="{{ $b->JumlahStok }}">
                    @if ($errors->has('JumlahStok'))
                        <div class="text-danger">
                            {{$errors->first('JumlahStok')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="DendaBuku"> <h5> Lokasi </h5> </label>
                    <input class="form-control" type="text" name="DendaBuku" required="required" value="{{ $b->DendaBuku }}">
                    @if ($errors->has('DendaBuku'))
                        <div class="text-danger">
                            {{$errors->first('DendaBuku')}}
                        </div>
                    @endif
                </div>

                <div class="form-group float-right">
                    <button class="btn-danger" type="reset"> Reset</button>
                    <button class="btn-success" type="sumbit"> OK </button>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>

</body>

</html>