@extends('base')
@section('container')
@section('title', 'Daftar Aset')

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
            <h2 class="float-left"> Daftar Aset Perbaikan </h2>
            <a class="btn btn-primary float-right mt-2" href="{{url('/asetPerbaikan/daftarAset/create')}}" role="button"> Tambah data</a>
        </div>
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
                        <th> ID Aset </th>
                        <th> Nama Aset </th>
                        <th class="text-center"> Status Perbaikan </th>
                        <th class="text-center"> Tanggal Perbaikan </th>
                        <th class="text-right"> Servicer </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset as $a)
                    <tr>
                        <td> {{$a->id_aset}} </td>
                        <td> {{$a->nama_aset}} </td>
                        <td class="text-center"> {{$a->status_perbaikan}} </td>
                        <td class="text-center"> {{$a->tanggal_perbaikan}} </td>
                        <td class="text-right"> {{$a->pj_perbaikan}} </td>
                        <td> 
                            <a href="/asetPerbaikan/daftarAset/edit/{{$a->id_aset}}" class="badge badge-warning" >Edit</a>
                            <a href="/asetPerbaikan/daftarAset/hapus/{{$a->id_aset}}" class="badge badge-danger" > Hapus </a>
                        </td>    
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection