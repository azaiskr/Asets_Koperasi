@extends('base2')
@section('pageView')
@section('title', 'Update Aset Jual Beli')

{{-- <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="aset_jual_beli"> Daftar Aset Jual Beli </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Aset Jual Beli </h3>
            <form action="/aset_jual_beli/update" method="post">
                @csrf
                @foreach($aset_jualbeli as $aj)
                <div class="form">
                    <label for="id_aset"> </label>
                    <input class="form-control" type="text" name="id_aset" required="required" value="{{ $aj->id_aset }}" >
                    @if ($errors->has('id_aset'))
                        <div class="text-danger">
                            {{$errors->first('id_aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="nama_aset"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="nama_aset" required="required" value="{{ $aj->nama_aset }}">
                    @if ($errors->has('nama_aset'))
                        <div class="text-danger">
                            {{$errors->first('nama_aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="stok_aset"> <h5> Stok </h5> </label><br>
                    <input class="form-control" type="number" name="stok_aset" required="required" value="{{ $aj->stok }}"> 
                    @if ($errors->has('stok_aset'))
                        <div class="text-danger">
                            {{$errors->first('stok_aset')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="nilai_ekonomi"> <h5> Nilai Ekonomi </h5> </label>
                    <input class="form-control" type="number" name="nilai_ekonomi" required="required" value="{{ $aj->nilai_ekonomi }}">
                    @if ($errors->has('nilai_ekonomi'))
                        <div class="text-danger">
                            {{$errors->first('nilai_ekonomi')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="lokasi_jual"> <h5> Lokasi </h5> </label>
                    <input class="form-control" type="text" name="lokasi_jual" required="required" value="{{ $aj->lokasi_jual }}">
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
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection