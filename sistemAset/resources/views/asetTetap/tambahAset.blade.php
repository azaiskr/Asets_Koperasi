@extends('base')
@section('container')
@section('title', 'Tambah data')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard"> Home </a></li>
            <li class="breadcrumb-item"><a href="AsetTetap"> Daftar Aset </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Tambah Data Aset </h3>
            <form action="/AsetTetap/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_Aset"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="nama_Aset" required="required" placeholder="nama aset tetap ... ">
                    @if ($errors->has('nama_Aset'))
                        <div class="text-danger">
                            {{$errors->first('nama_Aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="lokasi"> <h5> Lokasi </h5> </label><br>
                    <input class="form-control" type="text" name="lokasi" id="lokasi" required="required" placeholder="lokasi aset tetap ... ">
                    @if ($errors->has('status'))
                        <div class="text-danger">
                            {{$errors->first('status')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="kondisi"> <h5> Kondisi </h5> </label><br>
                    <select class="col-md-2" name="kondisi" id="kondisi" required="required">
                        <option class="text-center"> Baik </option>
                        <option class="text-center"> Jelek </option>
                    </select><br>
                    @if ($errors->has('kondisi'))
                        <div class="text-danger">
                            {{$errors->first('kondisi')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="jumlah"> <h5> Jumlah </h5> </label>
                    <input class="form-control" type="number" name="jumlah" required="required" placeholder="jumlah aset tetap ... ">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="ukuran"> <h5> Ukuran </h5> </label>
                    <input class="form-control" type="number" name="ukuran" required="required" placeholder="ukuran aset tetap ... ">
                    @if ($errors->has('ukuran'))
                        <div class="text-danger">
                            {{$errors->first('ukuran')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nilai_ekonomi"> <h5> Nilai </h5> </label>
                    <input class="form-control" type="number" name="nilai_ekonomi" required="required" placeholder="nilai ekonomi aset tetap ... ">
                    @if ($errors->has('nilai_ekonomi'))
                        <div class="text-danger">
                            {{$errors->first('nilai_ekonomi')}}
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