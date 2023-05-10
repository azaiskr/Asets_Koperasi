@extends('login.welcome')
@section('session')
@section('title', 'Sign Up')


<div class="center mt-4 mb-4 name">
    RESET PASSWORD
</div>
<div class="form-container"> 
    <form class="p-4 mt-3" action="/ResetPassword/update" method="post">
        @csrf
            @foreach($email as $d)
            <div class="input">
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input class="form-control" type="hidden" name="email" required="required" value="{{ $d->email }}" >
                </div>
            </div>
            @endforeach
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
        </div>
        
        
        <div class="center">
        <button class="btn mt-3">Reset Password</button>
        </div>
    </form>
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