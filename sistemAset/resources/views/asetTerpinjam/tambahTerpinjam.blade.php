@extends('base')
@section('container')
@section('title', 'Tambah Aset Terpinjam')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="AsetTerpinjam"> Daftar Aset Terpinjam </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Tambah Data Aset Terpinjam </h3>
            <form action="/AsetTerpinjam/store" method="post">
                @csrf
                <div class="form">
                    <label for="id_aset"> <h5> Nama Aset </h5> </label><br>
                    <select class="col-md-2" name="id_aset" id="id_aset" required="required">
                    @foreach($aset_tersedia as $at)
                        <option class="text-center" value="{{ $at->id_aset }}"> {{ $at->nama_aset }} </option>
                    @endforeach
                    </select>
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
                    <label for="jumlah_pinjaman"> <h5> Jumlah </h5> </label><br>
                    <input class="form-control" type="number" name="jumlah_pinjaman" id="jumlah_pinjaman" required="required" placeholder="jumlah pinjaman">
                    </select><br>
                    @if ($errors->has('jumlah_pinjaman'))
                        <div class="text-danger">
                            {{$errors->first('jumlah_pinjaman')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="tanggal_pinjaman"> <h5> Tanggal Pinjaman </h5> </label>
                    <input class="form-control" type="date" name="tanggal_pinjaman" required="required" placeholder="tanggal pinjaman ">
                    @if ($errors->has('tanggal_pinjaman'))
                        <div class="text-danger">
                            {{$errors->first('tanggal_pinjaman')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="tanggal_jatuh_tempo"> <h5> Tanggal Jatuh Tempo </h5> </label>
                    <input class="form-control" type="date" name="tanggal_jatuh_tempo" required="required" placeholder="tanggal jatuh tempo ">
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