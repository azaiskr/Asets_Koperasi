@extends('base')
@section('container')
@section('title', 'Rekapitulasi Aset')

<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">

        <div class="col-12 mt-2">
            <h2 class="center"><b> Rekapitulasi Aset</b></h2>
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
            <a class="btn btn-primary float-right mt-2" href="{{url('/rekapitulasiAset/create')}}" role="button"> Tambah data</a>
        </div>
        <div class="col-md-12 my-3">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center"> ID Aset </th>
                        <th class="col-5"> Jenis Aset </th>
                        <th class="text-center"> Kuantitas </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rekap as $rp)
                    <tr>
                        <td class="text-center"> {{$rp->id}} </td>
                        <td> {{$rp->jenis_aset}} </td>
                        <td class="text-center"> {{$rp->kuantitas}} </td>
                        <td> 
                            <a href="/rekapitulasiAset/edit/{{$rp->id}}" class="badge badge-warning" >Edit</a>
                            <a href="/rekapitulasiAset/hapus/{{$rp->id}}" class="badge badge-danger" > Hapus </a>
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection