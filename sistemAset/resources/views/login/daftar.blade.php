@extends('login.welcome')
@section('session')
@section('title', 'Sign Up')


<div class="center mt-4 mb-4 name">
    DAFTAR
</div>
<div class="form-container"> 
    <form class="p-4 mt-3" action="/pendaftaran/action" method="post">
        @csrf
        <div class="input-field"> 
            <div class="input"> Nama
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                        <input type="text" name="name" id="name" placeholder="Ketik namamu">
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger center" role="alert">
                        <small>{{$errors->first('name')}}</small>
                    </div>
                @endif
            </div>

            <div class="input"> Email
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="email" name="email" id="email" placeholder="Email aktifmu"> 
                </div>
                @if ($errors->has('email'))
                    <div class="alert alert-danger center" role="alert">
                        <small>{{$errors->first('email')}}</small>
                    </div>
                @endif 
            </div>
            
            <div class="input"> Password
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="password" placeholder="Kata sandi kombinasi huruf dan angka">  
                </div>
                @if ($errors->has('password'))
                    <div class="alert alert-danger center" role="alert">
                        <small>{{$errors->first('password')}}</small>
                    </div>
                @endif
            </div>

            <div class="input"> Konfirmasi Password
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ketik ulang kata sandimu">
                </div>
                @if ($errors->has('password'))
                    <div class="alert alert-danger center" role="alert">
                        <small>{{$errors->first('password')}}</small>
                    </div>
                @endif 
                
            </div>

            <div class="addinfo"> 
                <input type="checkbox" id="ingatPwd" name="ingatPwd" value="..." >
                <label for="ingatPwd"> <small> <small> Ingat Password </small></small></label> 
            </div>
        </div>
        
        <div class="center">
        <button class="btn mt-3">Buat Akun</button>
        </div>
    </form>
</div>
<div class="center fs-2">
    <p class ="info" > <small> Sudah punya akun? </small> <a href="/login">Masuk</a></p>
</div>

<style>
    .input{
        margin-top: 20px;
    }
    .addinfo{
        margin-top: 10px;
    }
</style>

@endsection