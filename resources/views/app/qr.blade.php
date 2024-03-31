@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/qr.css') }}">
@endpush

@section('container')
<div class="row text-center">
    <div class="align-items-center justify-content-center" >
        <img class="header-img" src="{{ asset('dist/img/header.png') }}" alt="">
    </div>
</div>
<div class="row text-center justify-content-center">
    <div class="qr">
        <div>
            <img src="{{ asset('dist/img/qr1.png') }}" alt="">
            <span>QR 1</span>
        </div>
        <div>
            <img src="{{ asset('dist/img/qr2.png') }}" alt="">
            <span>QR 2</span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="footnote">
            <p>
                &#8226; QR Code Anda akan dikirimkan melalui E-mail dan WhatsApp
                <br>
                &#8226; Scan QR Code Anda di lokasi acara untuk mendapatkan nomor meja
            </p>
        </div>
    </div>
    <button class="next">Next</button>
</div>
@endsection