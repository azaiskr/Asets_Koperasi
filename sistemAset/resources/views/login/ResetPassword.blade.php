@extends('login.welcome')
@section('session')
@section('title', 'Sign Up')

<h1>Reset Password Anda</h1>

<div>
    <p>Klik link di bawah untuk reset password Anda: </p>
    <a href="{{ route('user.edit', $email) }}">Reset Password</a>
    
</div>

@endsection