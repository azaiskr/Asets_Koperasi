@extends('base2')
@section('pageView')
@section('title', 'Update Servicer')

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
            <h3 style="text-align: center"> Edit Data Servicer </h3>

            <form action="/daftarServicer/update/{{$person->id_pj}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form">
                    <label for="nama"> <h5> Nama Servicer</h5> </label>
                    <input class="form-control" type="text" name="nama" value="{{$person->nama_pj}}" required="required">
                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{$errors->first('nama')}}
                        </div>
                    @endif 
                </div>
                <div class="form">
                    <label for="Hp"> <h5> Nomor Telepon </h5> </label>
                    <input class="form-control" type="number" name="Hp" value="{{$person->no_Hp}}" required="required">
                    @if ($errors->has('Hp'))
                        <div class="text-danger">
                            {{$errors->first('Hp')}}
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