@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/auth/failed.css') }}">
@endpush

@section('container')
<div class="row text-center">
    <div class="align-items-center justify-content-center" >
        <img class="header-img" src="{{ asset('dist/img/header.png') }}" alt="">
    </div>
</div>
<div class="row text-center justify-content-center">
    <div class="alertbox">
        <h5 id="msg">Warning!</h5>
        <img class="pngv" src="{{ asset('dist/img/x.png') }}" alt="">
        <h6 id="msg-1">Gagal</h6>
        <p id="msg-2">Ada masalah pada unggahan anda</p>
        <button class="next" onclick="window.location = '{{ url('/') }}'">Back</button>
    </div>
</div>
@endsection