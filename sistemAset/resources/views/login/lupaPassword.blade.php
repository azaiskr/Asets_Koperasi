@extends('login.welcome')
@section('session')
@section('title', 'Login Page')


<div class="center  name">
    <small> Lupa Password? </small>
</div>

<form action="/ResetPassword/reset" method="get">
    <div class="form-container"> 
        <p class="pesan"> Jangan khawatir. Kami akan mengirimkan link untuk perubahan password baru melalui emailmu. </p>
        <form class="email">
            <div class="input-field"> Email 
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="email" name="email" id="email" placeholder="Email yang terdaftar">
                </div>
            </div>

            @if ($message = Session::get('reset'))
            <div class="center error-message">
                {{ $message }}
            </div>
            @endif
            
            <div class="center">
            <button class="btn mt-3">Kirim</button>
            
            </div>
        </form>
    </div>
</form>


<style>
    .pesan{
        font-size: 12px;
    }

</style>


@endsection