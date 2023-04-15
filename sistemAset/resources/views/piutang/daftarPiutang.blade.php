@extends('base')
@section('container')
@section('title', 'Piutang')

<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"> Home </a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">

        <div class="col-12 mt-2">
            <h2 class="center"><b> Daftar Aset Piutang</b></h2>
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
            <a class="btn btn-primary float-right mt-2" href="{{url('/aset_piutang/create')}}" role="button"> Tambah data</a>
        </div>
        <div class="col-md-12 my-3">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th> ID Pinjaman </th>
                        <th class="col-4"> Nama Peminjam </th>
                        <th class="text-center"> Jumlah </th>
                        <th class="text-center"> Jatuh Tempo</th>
                        <th class="text-center"> Pelunasan </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $dt)
                    <tr>
                        <td> {{$dt->id_pinjaman}} </td>
                        <td> {{$dt->nama_peminjam}} </td>
                        <td class="text-right"> {{$dt->jumlah_pinjaman}} </td>
                        <td class="text-center"> {{$dt->waktu_pinjaman}} </td>
                        <td class="text-center"> {{$dt->pelunasan}} </td>
                        <td> 
                            <a href="/aset_piutang/edit/{{$dt->id_pinjaman}}" class="badge badge-warning" >Edit</a>
                            <a href="/aset_piutang/hapus/{{$dt->id_pinjaman}}" class="badge badge-danger" > Hapus </a>
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection