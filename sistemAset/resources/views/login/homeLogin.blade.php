<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistem Manajemen Aset Koperasi Mahasiswa </title>

    <!-- ======= Styles ======= -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">

</head>

<body>
    <!-- ================ SESSION PAGE =============== -->
    <div class="container" id="container">
        {{-- ============= SIGN IN FORM ============== --}}
        <div class="form-container sign-in-container">
            <form action="/login/actionlogin" method="post">
                @csrf
                <h1>Sign In</h1>
                <div class="input-field">
                    <div class="input-container">
                        <p class="input-label">Email</p>
                        <input type="email" name="email" id="email" placeholder="Enter your email" />
                    </div>
                    <div class="input-container">
                        <p class="input-label">Password</p>
                        <input type="password" name="password" id="password" placeholder="Enter your password" />
                        <a id="forgetPwd" href="#">Forgot your password?</a>
                    </div>
                </div>             
                <button> <a href="">Sign In </a></button> 
                <span class="breakLine"></span>
                <button class="btnGoogleSI" >
                    <a href="#" >
                        <img class="Google-si" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/1200px-Google_%22G%22_Logo.svg.png" alt="Sign-in Google" >
                        <div class="btnLabel"> Masuk dengan Google </div>
                    </a>
                </button>
                <span> Belum punya akun? <a href="#" class="register" id="signUp" >Create Account</a> </span>

                @if ($message = Session::get('verifikasi'))
                    <div class="center error-message">
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="center error-message">
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('verifIssues'))
                    <div class="center error-message">
                        {{ $message }}
                    </div>
                @endif
            </form>
        </div>

        {{-- ============= SIGN UP FORM ============== --}}
        <div class="form-container sign-up-container">
            <form action="/pendaftaran/action" method="post">
                @csrf
                <h1>Create Account</h1>
                <div class="input-field-create">
                    <div class="input-container">
                        <p class="input-label">Nama</p>
                        <input type="text" name="name" id="name" placeholder="Ketik nama lengkapmu" />
                        @if ($errors->has('name'))
                        <div class="alert alert-danger center" role="alert">
                            <small>{{$errors->first('name')}}</small>
                        </div>
                        @endif
                    </div>

                    <div class="input-container">
                        <p class="input-label">Email</p>
                        <input type="email" name="email" id="email" placeholder="Enter aktif kamu" />
                        @if ($errors->has('email'))
                        <div class="alert alert-danger center" role="alert">
                            <small>{{$errors->first('email')}}</small>
                        </div>
                        @endif 
                    </div>

                    <div class="input-container">
                        <p class="input-label">Password</p>
                        <input type="password" name="password" id="password" placeholder="Kata sandi kombinasi huruf dan angka" />
                        @if ($errors->has('password'))
                        <div class="alert alert-danger center" role="alert">
                            <small>{{$errors->first('password')}}</small>
                        </div>
                        @endif
                    </div>

                    <div class="input-container">
                        <p class="input-label">Konfirmasi Password</p>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ketik ulang kata sandimu" />
                        @if ($errors->has('password'))
                        <div class="alert alert-danger center" role="alert">
                            <small>{{$errors->first('password')}}</small>
                        </div>
                        @endif 
                    </div>

                    <div class="input-container">
                        <input type="checkbox" id="rememberMe" />
                        <label for="rememberMe">Ingat Password</label>
                    </div>
                </div>
                <div class="createAccount">
                    <button class="btnCreateAccount" ><a href="#" >CREATE ACCOUNT</a></button>
                    <span> Sudah punya akun? <a href="#" class="register" id="signIn" >Sign In</a> </span>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="{{asset('elements/registerElement.png')}}" alt="">
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="{{asset('elements/loginElement.png')}}" alt="loginImg">
                </div>
            </div>
        </div>
    </div>

    {{-- ========= FORGET PASSWORD FORM ========= --}}
    <div class="popup" id="popup" >
        <div class="close-btn">&times;</div>
        <div class="image-container">
            <img class="img-forget" src="{{asset('elements/forgetPwd.png')}}" alt="forgotPwd">
        </div>
        <div class="form-forgetPwd" action="/ResetPassword/reset" method="get">
            <h2>Lupa Password ?</h2>
            <p>Jangan khawatir.</p>
            <p>Kami akan mengirimkan link untuk perubahan password baru melalui Emailmu. </p>
            <div class="input-container">
                <p class="input-label">Email</p>
                <input type="email" name="email" id="email" placeholder="Email yang terdaftar">
            </div>
            @if ($message = Session::get('reset'))
            <div class="center error-message">
                {{ $message }}
            </div>
            @endif
            <button> <a href="#">SUBMIT</a> </button>
        </div>
    </div>


    <!-- ======= Scripts ======= -->
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const forgetLink = document.getElementById('forgetPwd');
        // const closeBtn = document.getElementsByClassName('close-btn');

        const container = document.getElementById('container');
        const popup = document.getElementsByClassName('.popup');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });

        // forgetLink.addEventListener('click', ()=> {
        //     popup.classList.add("active");
        // });
        // closeBtn.addEventListener('click', () => {
        //     popup.classList.remove("active");
        // });

    </script>
</body>
</html>