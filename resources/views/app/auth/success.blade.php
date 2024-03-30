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
        <h5>Congratulations!</h5>
    </div>
</div>
@endsection