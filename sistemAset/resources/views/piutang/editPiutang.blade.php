@extends('base2')
@section('pageView')
@section('title', 'Update Data Piutang')

{{-- <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/aset_piutang')}}"> Piutang </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div> --}}

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Aset Piutang </h3>

            <form action="/aset_piutang/update/" method="post">
                {{csrf_field()}}

                @foreach($data as $dt)
                <div class="form">
                    <label for="id"> <h5> ID Pinjaman </h5> </label>
                    <input class="form-control" type="show" name="id" id="id" required="required" value="{{$dt->id_pinjaman}}">
                    @if ($errors->has('id'))
                        <div class="text-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="nama"> <h5> Nama peminjam </h5> </label>
                    <input class="form-control" type="show" name="nama" id="nama" required="required" value="{{$dt->nama_peminjam}}">
                    @if ($errors->has('nama'))
                        <div class="text-danger">
                            {{$errors->first('nama')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="jumlah"> <h5> Jumlah </h5> </label>
                    <input class="form-control" type="show" name="jumlah" id="jumlah" required="required" value="{{$dt->jumlah_pinjaman}}">
                    @if ($errors->has('jumlah'))
                        <div class="text-danger">
                            {{$errors->first('jumlah')}}
                        </div>
                    @endif    
                </div>
                <div class="form" >
                    <label for="tanggal"> <h5> Jatuh Tempo </h5> </label>
                    <input class="form-control col-md-2 text-center" type=" date" name="tanggal" id="tanggal" required="required" value="{{$dt->waktu_pinjaman}}">
                    @if ($errors->has('tanggal'))
                        <div class="text-danger">
                            {{$errors->first('tanggal')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="status"> <h5> Pelunasan </h5> </label><br>
                    <select class="col-md-2" name="status" id="status" required="required" value="{{$dt->pelunasan}}">
                        <option class="text-center"> Lunas </option>
                        <option class="text-center"> Overdue </option>
                        <option class="text-center"> Belum Lunas </option>
                    </select><br>
                    @if ($errors->has('status'))
                        <div class="text-danger">
                            {{$errors->first('status')}}
                        </div>
                    @endif    
                </div>
                @endforeach

                <div class="form-group float-right">
                    <button class="btn-danger" type="reset"> Reset</button>
                    <button class="btn-success" type="sumbit"> OK </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection