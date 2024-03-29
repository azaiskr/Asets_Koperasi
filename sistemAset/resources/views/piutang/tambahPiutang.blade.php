@extends('base2')
@section('pageView')
@section('title', 'Input Data Aset Piutang')

{{-- <div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/aset_piutang')}}"> Piutang </a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Input Data Aset Piutang</h3>
            <form action="/aset_piutang/store" method="post">
                @csrf
                <div class="form">
                    <label for="id"> <h5> ID Pinjaman </h5> </label>
                    <input class="form-control" type="text" name="id" id="id" required="required" placeholder="">
                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="nama"> <h5> Nama peminjam </h5> </label>
                    <input class="form-control" type="text" name="nama" id="nama" required="required" placeholder="">
                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{$errors->first('nama')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="jumlah"> <h5> Jumlah </h5> </label>
                    <input class="form-control" type="number" name="jumlah" id="jumlah" required="required" placeholder="">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif    
                </div>
                <div class="form" >
                    <label for="tanggal"> <h5> Jatuh Tempo </h5> </label>
                    <input class="form-control col-md-2 text-center" type="date" name="tanggal" id="tanggal" required="required" placeholder="">
                    @if ($errors->has('tanggal'))
                        <div class="text-danger">
                            {{$errors->first('tanggal')}}
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