@extends('base')
@section('container')
@section('title', 'Tambah data')

<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/aset_piutang')}}"> Piutang </a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Tambah Data Aset Piutang</h3>
            <form action="/aset_piutang/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="id"> <h5> ID Pinjaman </h5> </label>
                    <input class="form-control" type="text" name="id" id="id" required="required" placeholder="id pinjaman">
                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="nama"> <h5> Nama peminjam </h5> </label>
                    <input class="form-control" type="text" name="nama" id="nama" required="required" placeholder="nama lengkap peminjam">
                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{$errors->first('nama')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="jumlah"> <h5> Jumlah </h5> </label>
                    <input class="form-control" type="number" name="jumlah" id="jumlah" required="required" placeholder="nominal peminjaman">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group mt-3" >
                    <label for="tanggal"> <h5> Jatuh Tempo </h5> </label>
                    <input class="form-control col-md-2 text-center" type="date" name="tanggal" id="tanggal" required="required" placeholder="tanggal jatuh tempo pinjaman">
                    @if ($errors->has('tanggal'))
                        <div class="text-danger">
                            {{$errors->first('tanggal')}}
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