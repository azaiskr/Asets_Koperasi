@extends('login.welcome')
@section('session')
@section('title', 'Login Page')


<div class="center mt-4 mb-4 name">
    MASUK
</div>
<div class="form-container"> 
    <form class="p-4 mt-3" action="/login/actionlogin" method="post">
        @csrf
        <div> Email </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="email" name="email" id="email" placeholder="Email yang kamu daftarkan">
        </div>
        <div class="input-field"> Password 
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Kata sandimu">
            </div>
            <div class="right"> <a href='/lupaPassword'> Lupa password? </a> </div>
        </div>

        @if ($message = Session::get('error'))
            <div class="center error-message">
                {{ $message }}
            </div>
        @endif
        
        <div class="center">
        <button class="btn mt-3">Masuk</button>
        </div>
    </form>
</div>
<div class="center fs-2">
    <p class ="info" > <small> Belum punya akun? </small> <a href="/pendaftaran">Daftar</a></p>
</div>

@endsection