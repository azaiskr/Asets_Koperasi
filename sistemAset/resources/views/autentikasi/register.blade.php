@extends('base')
@section('container')
@section('title', 'Tambah data')

<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"> Home </a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>

<div class="container"> 
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3 style="text-align: center"> Daftar </h3>
            <form action="/pendaftaran/action" method="post">
                @csrf
                <div class="form-group">
                    <label for="name"> <h5> Nama </h5> </label>
                    <input class="form-control" type="text" name="name" required="required" placeholder="ketik namamu ... ">
                    @if ($errors->has('name'))
                        <div class="text-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="form">
                    <label for="email"> <h5> Email </h5> </label><br>
                    <input class="form-control" type="email" name="email" id="email" required="required" placeholder="Ketik email-mu ... ">
                    @if ($errors->has('email'))
                        <div class="text-danger">
                            {{$errors->first('email')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="email"> <h5> Password </h5> </label><br>
                    <input class="form-control" type="password" name="password" id="password" required="required" placeholder="Ketik password-mu ... ">
                    @if ($errors->has('password'))
                        <div class="text-danger">
                            {{$errors->first('password')}}
                        </div>
                    @endif    
                </div>
                <div class="form">
                    <label for="email"> <h5> Password </h5> </label><br>
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required="required" placeholder="Ketik ulang password-mu ... ">
                    @if ($errors->has('password'))
                        <div class="text-danger">
                            {{$errors->first('password')}}
                        </div>
                    @endif    
                </div>

                <div class="form-group float-right">
                    <button class="btn btn-lg btn-danger" type="reset"> Reset</button>
                    <button class="btn btn-lg btn-success" type="sumbit"> OK </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection