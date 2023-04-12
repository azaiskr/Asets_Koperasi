@extends('login.welcome')
@section('session')
@section('title', 'Sign Up')


<div class="center mt-4 mb-4 name">
    DAFTAR
</div>
<div class="form-container"> 
    <form class="p-4 mt-3" action="..." method="...">
        <div> Nama </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="userName" id="userName" placeholder="Ketik namamu">
        </div>
        <div class="input-field"> 
            <div> Email
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="text" name="email" id="email" placeholder="Email aktifmu">
                </div>
            </div>
            
            <div class="input"> Password
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Kata sandi kombinasi huruf dan angka">
                </div>
            </div>

            <div class="input"> Konfirmasi Password
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="pwdKonfirm" id="pwdkonfirm" placeholder="Ketik ulang kata sandimu">
                </div>
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
    <p class ="info" > <small> Sudah punya akun? </small> <a href="/">Masuk</a></p>
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