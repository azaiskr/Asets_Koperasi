@extends('login.welcome')
@section('session')
@section('title', 'Sign Up')

<h1>Verifikasi Email Anda</h1>

<div>
    <p>Verifikasi email Anda dengan mengklik tautan di bawah: </p>
    <a href="{{ route('user.verify', $token) }}">Verifikasi Email</a>
</div>

@endsection