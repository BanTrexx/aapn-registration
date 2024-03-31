@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/dresscode.css') }}">
@endpush

@section('container')
<div class="row text-center justify-content-center">
    <div class="wrapper">
        <h5>Dresscode</h5>
        <div class="row" id="gallery">
            <div>
                <img src="{{ asset('dist/img/dresscode1.png') }}" alt="">
                <span>Satin-Edged Tuxedo</span>
            </div>
            <div>
                <img src="{{ asset('dist/img/dresscode2.png') }}" alt="">
                <span>Ethereal Layers Couture</span>
            </div>
        </div>
        <div class="row justify-content-end">
            <button type="button" class="submit">Next</button>
        </div>
    </div>
</div>
@endsection