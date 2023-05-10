@extends('base2')
@section('pageView')
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

<div class="pageSection">
    <div class="pageTitle">
        <span>Daftar Servicer</span>
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

    <div class="row">
        <a class="btnAdd" href="/daftarServicer/create" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div>
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center"> ID Servicer </th>
                        <th class="text-lefy"> Nama Servicer </th>
                        <th class="text-center"> No HP </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($person as $p)
                    <tr>
                        <td class="text-center"> {{$p->id_pj}} </td>
                        <td class="text-left"> {{$p->nama_pj}} </td>
                        <td class="text-center"> {{$p->no_Hp}} </td>
                        <td> 
                            <a class="btnEdit" href="/daftarServicer/edit/{{$p->id_pj}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/daftarServicer/hapus/{{$p->id_pj}}"> 
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection