@extends('base2')
@section('pageView')
@section('title', 'Rekap Aset Jual Beli')

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
            <h3 style="text-align: center"> Input Data Aset Jual Beli </h3>
            <form action="/aset_jual_beli/tambah" method="post">
                @csrf
                <div class="form">
                    <label for="id_aset"> <h5> ID Aset </h5> </label>
                    <input class="form-control" type="text" name="id_aset" required="required" placeholder="id aset jual beli ... ">
                    @if ($errors->has('id_aset'))
                        <div class="text-danger">
                            {{$errors->first('id_set')}}
                        </div>
                    @endif
                <div class="form">
                    <label for="nama_aset"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="nama_aset" required="required" placeholder="nama aset jual beli ... ">
                    @if ($errors->has('nama_aset'))
                        <div class="text-danger">
                            {{$errors->first('nama_set')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="stok_aset"> <h5> Stok Aset </h5> </label><br>
                    <input class="form-control" type="number" name="stok_aset" required="required" placeholder="jumlah stok aset ... ">

                    @if ($errors->has('stok_aset'))
                        <div class="text-danger">
                            {{$errors->first('stok_aset')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="nilai_ekonomi"> <h5> Nilai Ekonomi </h5> </label>
                    <input class="form-control" type="number" name="nilai_ekonomi" required="required" placeholder="Nilai Ekonomi Aset ... ">
                    @if ($errors->has('nilai_ekonomi'))
                        <div class="text-danger">
                            {{$errors->first('nilai_ekonomi')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="lokasi_jual"> <h5> Lokasi </h5> </label>
                    <input class="form-control" type="text" name="lokasi_jual" required="required" placeholder="lokasi jual aset ... ">
                    @if ($errors->has('lokasi_jual'))
                        <div class="text-danger">
                            {{$errors->first('lokasi_jual')}}
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