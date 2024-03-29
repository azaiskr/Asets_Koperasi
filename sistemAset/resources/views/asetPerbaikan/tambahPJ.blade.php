@extends('base2')
@section('pageView')
@section('title', 'Input Data Servicer')

{{-- <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan')}}"> Manajemen Aset Perbaikan </a> </li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan/daftarPJ')}}"> Daftar Servicer </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}
<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Input Data Servicer </h3>
            <form action="/daftarServicer/store" method="post">
                @csrf
                <div class="form">
                    <label for="nama_pj"> <h5> Nama Servicer</h5> </label>
                    <input class="form-control" type="text" name="nama_pj" id="nama_pj" required="required" placeholder="">
                    @if ($errors->has('nama_pj'))
                        <div class="text-danger">
                            {{$errors->first('nama_pj')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="no_Hp"> <h5> Nomor Telepon </h5> </label>
                    <input class="form-control" type="number" name="no_Hp" id="no_Hp" required="required" placeholder="">
                    @if ($errors->has('no_Hp'))
                        <div class="text-danger">
                            {{$errors->first('no_Hp')}}
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