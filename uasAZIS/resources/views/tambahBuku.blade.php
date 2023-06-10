@extends('welcome')
@section('pageView')
@section('title', 'Tambah Data Buku')

{{-- <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="/aset_tersedia"> Daftar Aset Tersedia </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Input Data Buku </h3>
            <form action="/buku/store" method="post">
                @csrf
                <div class="form">
                    <label for="idBuku"> <h5> ID Buku </h5> </label>
                    <input class="form-control" type="number" name="idBuku" required="required" placeholder="">
                    @if ($errors->has('idBuku'))
                        <div class="text-danger">
                            {{$errors->first('idBuku')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="judul"> <h5> Judul Buku </h5> </label>
                    <input class="form-control" type="text" name="judul" required="required" placeholder="">
                    @if ($errors->has('judul'))
                        <div class="text-danger">
                            {{$errors->first('judul')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="kategori"> <h5> Kategori </h5> </label>
                    <select name="kategori" id="kategori">
                        <option value="0">Pilih Kategori ... </option>
                        @foreach ($dataKategori as $kategori)
                            <option value="{{$kategori->idKategori}}"> {{$kategori->namaKategori}} </option>
                        @endforeach
                    </select>
                    @if ($errors->has('kategori'))
                        <div class="text-danger">
                            {{$errors->first('kategori')}}
                        </div>
                    @endif
                </div>

                <div class="form">
                    <label for="penulis"> <h5> Penulis </h5> </label>
                    <select name="penulis" id="penulis">
                    <option value="0">Pilih Kategori ... </option>
                        @foreach ($dataPenulis as $penulis)
                            <option value="{{$penulis->idPenulis}}"> {{$penulis->namaPenulis}} </option>
                        @endforeach
                    </select>
                    @if ($errors->has('penulis'))
                        <div class="text-danger">
                            {{$errors->first('penulis')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="penerbit"> <h5> Penerbit </h5> </label>
                    <input class="form-control" type="text" name="penerbit" id="penerbit" required="required" placeholder="">
                    @if ($errors->has('penerbit'))
                        <div class="text-danger">
                            {{$errors->first('penerbit')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="tahunTerbit"> <h5> Tahun Terbit </h5> </label>
                    <input class="form-control" type="number" name="tahunTerbit" id="tahunTerbit" required="required" placeholder="">
                    @if ($errors->has('tahunTerbit'))
                        <div class="text-danger">
                            {{$errors->first('tahunTerbit')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="jumlahStok"> <h5> Stok </h5> </label>
                    <input class="form-control" type="number" name="jumlahStok" id="jumlahStok" required="required" placeholder="">
                    @if ($errors->has('jumlahStok'))
                        <div class="text-danger">
                            {{$errors->first('jumlahStok')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="dendaBuku"> <h5>Denda Buku </h5> </label>
                    <input class="form-control" type="text" name="dendaBuku" id="dendaBuku" required="required" placeholder="">
                    @if ($errors->has('dendaBuku'))
                        <div class="text-danger">
                            {{$errors->first('dendaBuku')}}
                        </div>
                    @endif    
                </div>

                <div class="form-group float-right">
                    <button class="btn-danger" type="reset"> Reset</button>
                    <button class="btn-success" type="sumbit"> OK </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection