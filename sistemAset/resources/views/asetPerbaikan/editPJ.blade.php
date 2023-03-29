@extends('base')
@section('container')
@section('title', 'Edit data')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan')}}"> Manajemen Aset Perbaikan </a> </li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan/daftarPJ')}}"> Daftar Servicer </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>
<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Edit Data Servicer </h3>
            <?php $person = DB::table('pj_perbaikans')->get(); ?>
            @foreach($person as $p)
            <form action="/daftarPJ/update" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nama"> <h5> Nama Servicer</h5> </label>
                    <input class="form-control" type="text" name="nama" value="{{$p->nama_pj}}" required="required">
                </div>
                <div class="form-group">
                    <label for="Hp"> <h5> Nomor Telepon </h5> </label>
                    <input class="form-control" type="number" name="Hp" value="{{$p->no_Hp}}" required="required">
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-lg btn-danger" type="reset"> Reset</button>
                    <button class="btn btn-lg btn-primary" type="sumbit"> OK </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection