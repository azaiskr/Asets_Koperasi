@extends('base')
@section('container')
@section('title', 'Manajemen Aset Perbaikan')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan')}}"> Manajemen Aset Perbaikan </a> </li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row row-cols-8 ml-2 mt-2">
        <h2> Manajemen Aset Perbaikan </h2>
    </div>
    <div class="row row-cols-4">
        <a class="btn btn-outline-dark mt-4 ml-4 shadow-sm p-3 mb-5 bg-gray rounded" style="width:18rem;" href="{{url('/asetPerbaikan/daftarAset')}}" role="button"> 
            <div class="card-body">
                <h5 class="card-label"> Daftar Aset Perbaikan </h5>
            </div>
        </a>
        <a class="btn btn-outline-dark mt-4 ml-4 shadow-sm p-3 mb-5 bg-gray rounded" style="width:18rem;" href="{{url('/asetPerbaikan/daftarPJ')}}" role="button"> 
            <div class="card-body">
                <h5 class="card-label"> Daftar Servicer </h5>
            </div>
        </a>
        
    </div>
</div>
@endsection