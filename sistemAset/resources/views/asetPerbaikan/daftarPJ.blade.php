@extends('base')
@section('container')
@section('title', 'Daftar Servicer')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan')}}"> Manajemen Aset Perbaikan </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="my-4 col-12">
            <h2 class="float-left"> Daftar Servicer </h2>
            <a class="btn btn-primary float-right mt-2" href="{{url('/asetPerbaikan/daftarPJ/create')}}" role="button"> Tambah data</a>
        </div>
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center"> ID Servicer </th>
                        <th> Nama Servicer </th>
                        <th class="text-center"> No HP </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $person = DB::table('pj_perbaikans')->get(); ?>
                    @foreach($person as $p)
                    <tr>
                        <td class="text-center"> {{$p->id_pj}} </td>
                        <td> {{$p->nama_pj}} </td>
                        <td class="text-center"> {{$p->no_Hp}} </td>
                        <td> 
                            <a href="/asetPerbaikan/daftarPJ/edit/{{$p->id_pj}}" class="badge badge-success" >Edit</a>
                            <a href="/asetPerbaikan/daftarPJ/hapus/{{$p->id_pj}}" class="badge badge-danger" > Hapus </a>
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection