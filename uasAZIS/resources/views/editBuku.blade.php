@extends('welcome')
@section('pageView')
@section('title', 'Update Aset Tersedia')

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
            <h3 style="text-align: center"> Edit Data Buku </h3>
        
            <form action="/buku/update" method="post">
                @csrf
                @foreach($buku as $data)

                <div class="form">
                    <label for="idBuku"> <h5> ID Buku </h5> </label>
                    <input class="form-control" type="number" name="idBuku" required="required" placeholder="" value="{{ $data->idBuku }}" readonly style="background-color:#ffffff00; cursor: not-allowed;">
                    @if ($errors->has('idBuku'))
                        <div class="text-danger">
                            {{$errors->first('idBuku')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="judul"> <h5> Judul Buku </h5> </label>
                    <input class="form-control" type="text" name="judul" required="required" placeholder="" value="{{ $data->judul }}">
                    @if ($errors->has('judul'))
                        <div class="text-danger">
                            {{$errors->first('judul')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="penulis"> <h5> Penulis </h5> </label>
                    <input class="form-control" type="text" name="penulis" id="penulis" required="required" placeholder="" value="{{ $data->penulis }}">
                    @if ($errors->has('penulis'))
                        <div class="text-danger">
                            {{$errors->first('penulis')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="penerbit"> <h5> Penerbit </h5> </label>
                    <input class="form-control" type="text" name="penerbit" id="penerbit" required="required" placeholder="" value="{{ $data->penerbit }}">
                    @if ($errors->has('penerbit'))
                        <div class="text-danger">
                            {{$errors->first('penerbit')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="tahunTerbit"> <h5> Tahun Terbit </h5> </label>
                    <input class="form-control" type="number" name="tahunTerbit" id="tahunTerbit" required="required" placeholder="" value="{{ $data-> tahunTerbit }}">
                    @if ($errors->has('tahunTerbit'))
                        <div class="text-danger">
                            {{$errors->first('tahunTerbit')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="jumlahStok"> <h5> Stok </h5> </label>
                    <input class="form-control" type="number" name="jumlahStok" id="jumlahStok" required="required" placeholder="" value="{{ $data->jumlahStok }}">
                    @if ($errors->has('jumlahStok'))
                        <div class="text-danger">
                            {{$errors->first('jumlahStok')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="dendaBuku"> <h5>Denda Buku </h5> </label>
                    <input class="form-control" type="text" name="dendaBuku" id="dendaBuku" required="required" placeholder=""value="{{ $data->dendaBuku }}">
                    @if ($errors->has('dendaBuku'))
                        <div class="text-danger">
                            {{$errors->first('dendaBuku')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group float-right">
                    <button class="btn-danger" type="reset"> Reset </button>
                    <button class="btn-success" type="sumbit"> OK </button>
                </div>
                @endforeach
            </form>
            
        </div>
    </div>
</div>
@endsection
