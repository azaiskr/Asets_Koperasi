@extends('base')
@section('title', 'Dafar Aset Perbaikan')
@section('conttainer')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/aset_perbaikan')}}"> Aset Perbaikan </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="my-4 col-12">
            <h2 class="float-left"> Daftar Aset Perbaikan </h2>
            <a class="btn btm-primary float-right mt-2" href="{{url('/create')}}" role="button"> Tambah data</a>
        </div>

        <div class="col-md-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center"> ID Aset </th>
                        <th> Nama Aset </th>
                        <th class="text-center"> Status Perbaikan </th>
                        <th> Tanggal Perbaikan </th>
                        <th class="text-center"> Penanggung Jawab </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aset)
                    <tr>
                        <td class="text-center"> {{$aset->id_Aset}} </td>
                        <td> {{$aset->nama_Aset}} </td>
                        <td class="text-center"> {{$aset->status_Perbaikan}} </td>
                        <td> {{$aset->tanggal_Perbaikan}} </td>
                        <td class="text-center"> {{$aset->pj_perbaikan}} </td>
                        <td> 
                            <a href="{{url('/edit')}}"class="badge badge-success" >Edit</a>
                            <a href="" class="badge badge-danger" > Hapus </a>
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection