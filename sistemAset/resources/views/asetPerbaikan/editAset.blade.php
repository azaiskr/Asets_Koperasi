@extends('base')
@section('container')
@section('title', 'Edit data')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan')}}"> Manajemen Aset Perbaikan </a> </li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan/daftarAset')}}"> Daftar Servicer </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>
<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Aset </h3>

            <form action="/asetPerbaikan/update/{{$aset->id_aset}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="id"> <h5> ID Aset </h5> </label>
                    <input class="form-control" type="number" name="id" id="id" required="required" value="{{$aset->id_aset}}">
                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="nama"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="nama" id="nama" required="required" value="{{$aset->nama_aset}}">
                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{$errors->first('nama')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="status"> <h5> Status Perbaikan </h5> </label><br>
                    <select class="col-md-2" name="status" id="status" required="required" value="{{$aset->status_perbaikan}}">
                        <option class="text-center"> OK </option>
                        <option class="text-center"> Diperbaiki </option>
                    </select><br>
                    @if ($errors->has('status'))
                        <div class="text-danger">
                            {{$errors->first('status')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group mt-3" >
                    <label for="tanggal"> <h5> Tanggal Perbaikan </h5> </label>
                    <input class="form-control col-md-2 text-center" type="date" name="tanggal" id="tanggal" required="required" value="{{$aset->tanggal_perbaikan}}">
                    @if ($errors->has('tanggal'))
                        <div class="text-danger">
                            {{$errors->first('tanggal')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="servicer"> <h5> ID Servicer </h5> </label>
                    <input class="form-control" type="number" name="servicer" id="servicer" value="{{$aset->pj_perbaikan}}">
                    @if ($errors->has('servicer'))
                        <div class="text-danger">
                            {{$errors->first('servicer')}}
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