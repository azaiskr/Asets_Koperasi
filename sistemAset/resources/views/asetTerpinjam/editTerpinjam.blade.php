@extends('base')
@section('container')
@section('title', 'Edit Aset Terpinjam')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="AsetTerpinjam"> Daftar Aset Terpinjam </a> </li>

            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Aset </h3>
            
            <form action="/AsetTerpinjam/update" method="post">
               
                @csrf
                @foreach($aset_terpinjam as $at)
                <div class="form-group">
                    <label for="id_aset"> </label>
                    <input class="form-control" type="hidden" name="id_aset" required="required" value="{{ $at->id_aset }}" >
                    @if ($errors->has('id_aset'))
                        <div class="text-danger">
                            {{$errors->first('id_aset')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nama_aset"> <h5> Nama Aset </h5> </label>
                    <input class="form-control" type="text" name="nama_aset" required="required" value="{{ $at->nama_aset }}">
                    @if ($errors->has('nama_aset'))
                        <div class="text-danger">
                            {{$errors->first('nama_aset')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="nama_peminjam"> <h5> Nama Peminjam </h5> </label><br>
                    <input class="form-control" type="text" name="nama_peminjam" id="nama_peminjam" required="required" value="{{ $at->nama_peminjam }}">
                    @if ($errors->has('nama_peminjam'))
                        <div class="text-danger">
                            {{$errors->first('nama_peminjam')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="jumlah_pinjaman"> <h5> Jumlah Pinjaman </h5> </label>
                    <input class="form-control" type="number" name="jumlah_pinjaman" required="required" value="{{ $at->jumlah_pinjaman }}">
                    @if ($errors->has('jumlah_pinjaman'))
                        <div class="text-danger">
                            {{$errors->first('jumlah_pinjaman')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="tanggal_pinjaman"> <h5> Tanggal Pinjaman </h5> </label><br>
                    <input class="form-control" type="date" name="tanggal_pinjaman" id="tanggal_pinjaman" required="required" value="{{ $at->tanggal_pinjaman }}">                        
                    </select><br>
                    @if ($errors->has('tanggal_pinjaman'))
                        <div class="text-danger">
                            {{$errors->first('tanggal_pinjaman')}}
                        </div>
                    @endif    
                </div>
                <div class="form-group">
                    <label for="tanggal_jatuh_tempo"> <h5> Tanggal Jatuh Tempo </h5> </label>
                    <input class="form-control" type="date" name="tanggal_jatuh_tempo" required="required" value="{{ $at->tanggal_jatuh_tempo }}">
                    @if ($errors->has('tanggal_jatuh_tempo'))
                        <div class="text-danger">
                            {{$errors->first('tanggal_jatuh_tempo')}}
                        </div>
                    @endif
                </div>

                <div class="form-group float-right">
                    <button class="btn btn-lg btn-danger" type="reset"> Reset </button>
                    <button class="btn btn-lg btn-success" type="sumbit"> OK </button>
                </div>
                @endforeach
            </form>
            
        </div>
    </div>
</div>
@endsection
