@extends('base')
@section('container')
@section('title', 'Daftar User')

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
            <h2 class="center"><b> Daftar User</b></h2>
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
        
        <div class="col-md-12 my-3">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center"> ID User </th>
                        <th class="col-5"> Nama User </th>
                        <th class="text-center"> Email </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $adm)
                    <tr>
                        <td class="text-center"> {{$adm->id}} </td>
                        <td> {{$adm->name}} </td>
                        <td class="text-center"> {{$adm->email}} </td>
                        <td> 
                            <a href="/admin/hapus/{{$adm->id}}" class="badge badge-danger" > Hapus </a>
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection