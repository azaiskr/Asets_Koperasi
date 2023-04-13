@extends('base')
@section('container')
@section('title', 'Tambah data')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard"> Home </a></li>
            <li class="breadcrumb-item"><a href="AsetTerpinjam"> Daftar Aset Terpinjam </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Tambah Data Aset Aset Terpinjam </h3>
            <form action="/AsetTerpinjam/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_aset"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="nama_aset" required="required" placeholder="nama aset yang dipinjam">
                    @if ($errors->has('nama_aset'))
                        <div class="text-danger">
                            {{$errors->first('nama_aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="nama_peminjam"> <h5> Nama Peminjam </h5> </label><br>
                    <input class="form-control" type="text" name="nama_peminjam" id="nama_peminjam" required="required" placeholder="nama peminjam">
                    @if ($errors->has('nama_peminjam'))
                        <div class="text-danger">
                            {{$errors->first('nama_peminjam')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="jumlah"> <h5> Jumlah </h5> </label><br>
                    <input class="form-control" type="number" name="jumlah" id="jumlah" required="required" placeholder="jumlah pinjaman">
                    </select><br>
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="tanggal_pinjaman"> <h5> Tanggal Pinjaman </h5> </label>
                    <input class="form-control" type="number" name="tanggal_pinjaman" required="required" placeholder="tanggal_pinjaman ">
                    @if ($errors->has('tanggal_pinjaman'))
                        <div class="text-danger">
                            {{$errors->first('tanggal_pinjaman')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="tanggal_jatuh_tempo"> <h5> Tanggal Jatuh Tempo </h5> </label>
                    <input class="form-control" type="number" name="tanggal_jatuh_tempo" required="required" placeholder="tanggal_jatuh_tempo ">
                    @if ($errors->has('tanggal_jatuh_tempo'))
                        <div class="text-danger">
                            {{$errors->first('tanggal_jatuh_tempo')}}
                        </div>
                    @endif
                </div>

                <div class="form-group float-right">
                    <button class="btn btn-lg btn-danger" type="reset"> Reset</button>
                    <button class="btn btn-lg btn-success" type="sumbit"> OK </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection