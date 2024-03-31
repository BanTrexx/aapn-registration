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
        <p id="msg-2">Terima kasih atas konfirmasi nya.<br>Silakan cek E-mail Anda.</p>
        <button class="next">Next</button>
    </div>
</div>
@endsection