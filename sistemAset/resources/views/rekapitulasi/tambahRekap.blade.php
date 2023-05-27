@extends('base2')
@section('pageView')
@section('title', 'Input Data Rekap')

{{-- <div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/rekapitulasiAset')}}"> Rekapitulasi Aset </a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Tambah Rekapitulasi Aset</h3>
            <form action="/rekapitulasiAset/store" method="post">
                @csrf
                <div class="form">
                    <label for="id"> <h5> ID aset </h5> </label>
                    <input class="form-control" type="number" name="id" id="id" required="required" placeholder="">
                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="jenis"> <h5> Jenis aset </h5> </label>
                    <input class="form-control" type="text" name="jenis" id="jenis" required="required" placeholder="">
                    @if ($errors->has('jenis'))
                        <div class="text-danger">
                            {{$errors->first('jenis')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="jumlah"> <h5> Kuantitas </h5> </label>
                    <input class="form-control" type="number" name="jumlah" id="jumlah" required="required" placeholder="">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
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