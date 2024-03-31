@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/rsvp.css') }}">
@endpush

@section('container')
<div class="row text-center">
    <div class="align-items-center justify-content-center" >
        <img class="header-img" src="{{ asset('dist/img/header.png') }}" alt="">
    </div>
</div>
<div class="row text-center justify-content-center">
    <div class="rsvp">
        <h5>RSVP</h5>
        <p>Apakah anda bersedia hadir ke acara AAPN 2024?</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
            <label class="form-check-label" for="inlineRadio1">Bersedia</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Tidak</label>
        </div>
    </div>
</div>
<div class="row text-center justify-content-center">
    <button class="next">Next</button>
</div>
@endsection