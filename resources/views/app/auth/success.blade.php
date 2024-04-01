@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/auth/success.css') }}">
@endpush

@section('container')
<div class="row text-center">
    <div class="align-items-center justify-content-center" >
        <img class="header-img" src="{{ asset('dist/img/header.png') }}" alt="">
    </div>
</div>
<div class="row text-center justify-content-center">
    <div class="alertbox">
        <h5 id="msg">Congratulations!</h5>
        <img class="pngv" src="{{ asset('dist/img/v.png') }}" alt="">
        <h6 id="msg-1">Sukses!</h6>
        @if ($user->role == 0)
            <p id="msg-2">Selamat datang <strong>Admin</strong> di AAPN 2024<br>Registration</p>
        @else
            <p id="msg-2">Selamat datang di AAPN 2024<br>Registration</p>
        @endif
        <a href="/registration/{{ $user->agent_code }}">
            <button class="next">Next</button>
        </a>
    </div>
</div>
@endsection