@extends('base2')
@section('pageView')
@section('title', 'Update Aset Tersedia')

{{-- <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="/aset_tersedia"> Daftar Aset Tersedia </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Aset Tersedia </h3>
        
            <form action="/AsetTersedia/update" method="post">
               
                @csrf
                @foreach($aset_tersedia as $at)
                <div class="form">
                    <label for="id_aset"> </label>
                    <input class="form-control" type="hidden" name="id_aset" required="required" value="{{ $at->id_aset }}" >
                    @if ($errors->has('id_aset'))
                        <div class="text-danger">
                            {{$errors->first('id_aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="nama_aset"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="nama_aset" required="required" value="{{ $at->nama_aset }}">
                    @if ($errors->has('nama_aset'))
                        <div class="text-danger">
                            {{$errors->first('nama_aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="stok"> <h5> Stok </h5> </label><br>
                    <input class="form-control" type="text" name="stok" id="stok" required="required" value="{{ $at->stok }}">
                    @if ($errors->has('stok'))
                        <div class="text-danger">
                            {{$errors->first('stok')}}
                        </div>
                    @endif    
                </div>

                <div class="form-group float-right">
                    <button class="btn-danger" type="reset"> Reset </button>
                    <button class="btn-success" type="sumbit"> OK </button>
                </div>
                @endforeach
            </form>
            
        </div>
    </div>
</div>
@endsection
