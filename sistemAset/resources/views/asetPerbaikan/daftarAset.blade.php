@extends('base')
@section('container')
@section('title', 'Daftar Aset Perbaikan')

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
            <h2 class="center"><b> Daftar Aset Perbaikan</b></h2>
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
        <div class="col my-2">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
                        <th class="col-0.5"> ID </th>
                        <th class="col-4"> Nama Aset </th>
                        <th class="text-center"> Status </th>
                        <th class="text-center"> Tanggal Perbaikan </th>
                        <th class="text-right col-3"> Servicer </th>
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
                        @foreach($pj as $p)
                            @if($a->pj_perbaikan == $p->id_pj)
                                <td class="text-right">{{$p->nama_pj}}</td>
                            @endif
                        @endforeach
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