@extends('base2')
@section('pageView')
@section('title', 'Update Data Aset Tetap')

{{-- <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="/AsetTetap"> Daftar Aset </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Aset Tetap </h3>
            
            <form action="/AsetTetap/update" method="post">
               
                @csrf
                @foreach($aset_tetaps as $at)
                <div class="form">
                    <label for="id_Aset"> </label>
                    <input class="form-control" type="hidden" name="id_Aset" required="required" value="{{ $at->id_Aset }}" >
                    @if ($errors->has('id_Aset'))
                        <div class="text-danger">
                            {{$errors->first('id_Aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="nama_Aset"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="nama_Aset" required="required" value="{{ $at->nama_Aset }}">
                    @if ($errors->has('nama_Aset'))
                        <div class="text-danger">
                            {{$errors->first('nama_Aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="lokasi"> <h5> Lokasi </h5> </label><br>
                    <input class="form-control" type="text" name="lokasi" id="lokasi" required="required" value="{{ $at->lokasi }}">
                    @if ($errors->has('lokasi'))
                        <div class="text-danger">
                            {{$errors->first('lokasi')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="kondisi"> <h5> Kondisi </h5> </label><br>
                    <select class="col-md-2" name="kondisi" id="kondisi" required="required" >
                        <option class="text-center" >{{ $at->kondisi }}</option>
                        <option class="text-center"> Baik </option>
                        <option class="text-center"> Jelek </option>
                    </select><br>
                    @if ($errors->has('kondisi'))
                        <div class="text-danger">
                            {{$errors->first('kondisi')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="jumlah"> <h5> Jumlah </h5> </label>
                    <input class="form-control" type="number" name="jumlah" required="required" value="{{ $at->jumlah }}">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="ukuran"> <h5> Ukuran </h5> </label>
                    <input class="form-control" type="number" name="ukuran" required="required" value="{{ $at->ukuran }}">
                    @if ($errors->has('ukuran'))
                        <div class="text-danger">
                            {{$errors->first('ukuran')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="nilai_ekonomi"> <h5> Nilai </h5> </label>
                    <input class="form-control" type="number" name="nilai_ekonomi" required="required" value="{{ $at->nilai_ekonomi }}">
                    @if ($errors->has('nilai_ekonomi'))
                        <div class="text-danger">
                            {{$errors->first('nilai_ekonomi')}}
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
