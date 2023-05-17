@extends('base')
@section('container')
@section('title', 'Tambah data')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="/AsetPengalihan"> Daftar Aset Pengalihan </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Aset Pengalihan </h3>
            <form action="/AsetPengalihan/update" method="post">
                @csrf
                @foreach($aset_pengalihan as $ap)
                <div class="form-group">
                    <label for="id_Aset"> </label>
                    <input class="form-control" type="hidden" name="id_Aset" required="required" value="{{ $ap->id_Aset }}" >
                    @if ($errors->has('id_Aset'))
                        <div class="text-danger">
                            {{$errors->first('id_Aset')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nama_Aset"> <h5> Nama Aset </h5> </label>
                    @foreach ($aset_tetaps as $at)
                    <label class="form-control" type="text" name="nama_Aset" required="required" >{{ $at->nama_Aset }}</label>
                    @if ($errors->has('nama_Aset'))
                        <div class="text-danger">
                            {{$errors->first('nama_Aset')}}
                        </div>
                    @endif
                    @endforeach
                </div>
                <div class="form">
                    <label for="jenis_Pengalihan"> <h5> Jenis Pengalihan </h5> </label><br>
                    <select class="col-md-2" name="jenis_Pengalihan" id="jenis_Pengalihan" required="required" >
                        <option class="text-center"> {{ $ap->jenis_Pengalihan }} </option>
                        <option class="text-center"> Dijual </option>
                        <option class="text-center"> Dipindahtangankan </option>
                    </select><br>
                    @if ($errors->has('jenis_Pengalihan'))
                        <div class="text-danger">
                            {{$errors->first('jenis_Pengalihan')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="jumlah"> <h5> Jumlah </h5> </label>
                    <input class="form-control" type="number" name="jumlah" required="required" value="{{ $ap->jumlah }}">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="lokasi_Pengalihan"> <h5> Lokasi </h5> </label>
                    <input class="form-control" type="text" name="lokasi_Pengalihan" required="required" value="{{ $ap->lokasi_Pengalihan }}">
                    @if ($errors->has('lokasi_Pengalihan'))
                        <div class="text-danger">
                            {{$errors->first('lokasi_Pengalihan')}}
                        </div>
                    @endif
                </div>

                <div class="form-group float-right">
                    <button class="btn btn-lg btn-danger" type="reset"> Reset</button>
                    <button class="btn btn-lg btn-success" type="sumbit"> OK </button>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection