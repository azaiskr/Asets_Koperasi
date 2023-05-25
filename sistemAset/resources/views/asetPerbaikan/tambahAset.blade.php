@extends('base2')
@section('pageView')
@section('title', 'Perbaiki Aset')

{{-- <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan')}}"> Manajemen Aset Perbaikan </a> </li>
            <li class="breadcrumb-item"><a href="{{url('/AsetTetap')}}"> Daftar Aset </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Perbaiki Aset </h3>
            <form action="/asetPerbaikan/store" method="post">
                @csrf
                <div class="form">
                    <label for="id_Aset"> <h5> Nama Aset </h5> </label>
                    <select class="col-md-2" name="id_Aset" id="id_Aset" required="required">
                    @foreach($aset_tetaps as $ap)
                        <option class="text-center" value="{{ $ap->id_Aset }}"> {{ $ap->nama_Aset }} </option>
                    @endforeach
                    </select>
                </div>
                <div class="form">
                    <label for="jumlah"> <h5> Jumlah </h5> </label>
                    <input class="form-control" type="number" name="jumlah" required="required" placeholder="">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="status"> <h5> Status Perbaikan </h5> </label>
                    <select class="col-md-2" name="status" id="status" required="required">
                        <option class="text-center"> OK </option>
                        <option class="text-center"> Diperbaiki </option>
                    </select>
                    @if ($errors->has('status'))
                        <div class="text-danger">
                            {{$errors->first('status')}}
                        </div>
                    @endif    
                </div>
                <div class="form" >
                    <label for="tanggal"> <h5> Tanggal Perbaikan </h5> </label>
                    <input class="form-control col-md-2 text-center" type="date" name="tanggal" id="tanggal" required="required" placeholder="">
                    @if ($errors->has('tanggal'))
                        <div class="text-danger">
                            {{$errors->first('tanggal')}}
                        </div>
                    @endif
                </div>

                <div class="form">
                    <label for="servicer"> <h5> Servicer </h5> </label>
                    <select class="col-md-2" name="servicer" id="servicer" required="required">
                    @foreach($pj_perbaikans as $pp)
                        <option class="text-center" value="{{ $pp->id_pj }}"> {{ $pp->nama_pj }} </option>
                    @endforeach
                    </select>
                </div>
                <!--
                <div class="form-group">
                    <label for="servicer"> <h5> ID Servicer </h5> </label>
                    <input class="form-control" type="number" name="servicer" id="servicer" placeholder="">
                    @if ($errors->has('servicer'))
                        <div class="text-danger">
                            {{$errors->first('servicer')}}
                        </div>
                    @endif
                </div>
                -->
                @if ($message = Session::get('error'))
                <div class="center error-message">
                    {{ $message }}
                </div>
                @endif
                <div class="form-group float-right">
                    <button class="btn-danger" type="reset"> Reset</button>
                    <button class="btn-success" type="sumbit"> OK </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection