@extends('base2')
@section('pageView')
@section('title', 'Daftar Aset Perbaikan')

<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item"><a href="{{url('/asetPerbaikan')}}"> Manajemen Aset Perbaikan </a> </li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>


<div class="pageSection">
    <div class="pageTitle">
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


    <div class="row">
        <a class="btnAdd" href="/asetPerbaikan/create" role="button"> 
            <i class="bi bi-plus-lg"></i>
            <span class="btnLabel">Tambah data</span>
        </a>

        <div>
            <table class="table-div">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center"> ID Aset</th>
                        <th class="text-left"> Nama Aset </th>
                        <th class="text-center"> Status </th>
                        <th class="text-center"> Tanggal Perbaikan </th>
                        <th class="text-right"> Servicer </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($aset as $a)
                    <tr>
                        <td class="text-center" > {{$a->id_aset}} </td>
                        <td class="text-left" > {{$a->nama_aset}} </td>
                        <td class="text-center"> {{$a->status_perbaikan}} </td>
                        <td class="text-center"> {{$a->tanggal_perbaikan}} </td>
                        @foreach($pj as $p)
                            @if($a->pj_perbaikan == $p->id_pj)
                                <td class="text-right">{{$p->nama_pj}}</td>
                            @endif
                        @endforeach
                        <td> 
                            <a class="btnEdit" href="/asetPerbaikan/edit/{{$a->id_aset}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btnRemove" href="/asetPerbaikan/hapus/{{$a->id_aset}}"> 
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