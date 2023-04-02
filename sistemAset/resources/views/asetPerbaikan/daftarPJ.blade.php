@extends('base')
@section('container')
@section('title', 'Daftar Servicer')

<div class="container mt-3">
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

        <div class="col-12 mt-2">
            <h2 class="center"><b> Daftar Servicer</b></h2>
            @if(session('status'))
                <div class="alert alert-success mt-2 mb-2" id="alert">
                    {{session('status')}}
                </div>
                <script>
                    setTimeout(function(){
                        document.getElementById('alert').style.display = 'none';
                    }, 3000);
                </script>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger mt-2 mb-2" id="alert">
                    {{session('danger')}}
                </div>
                <script>
                    setTimeout(function(){
                        document.getElementById('alert').style.display = 'none';
                    }, 3000);
                </script>
            @endif
        </div>
        
        <div class="col-12">
            <a class="btn btn-primary float-right mt-2" href="{{url('/asetPerbaikan/daftarAset/create')}}" role="button"> Tambah data</a>
        </div>
        <div class="col-md-12 my-3">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center"> ID Servicer </th>
                        <th class="col-5"> Nama Servicer </th>
                        <th class="text-center col-4"> No HP </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($person as $p)
                    <tr>
                        <td class="text-center"> {{$p->id_pj}} </td>
                        <td> {{$p->nama_pj}} </td>
                        <td class="text-center"> {{$p->no_Hp}} </td>
                        <td> 
                            <a href="/asetPerbaikan/daftarPJ/edit/{{$p->id_pj}}" class="badge badge-warning" >Edit</a>
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