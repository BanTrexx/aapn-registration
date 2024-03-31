@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/online2.css') }}">
@endpush

@section('container')
<div class="row text-center justify-content-center">
    <div class="validation-form">
        <h5>Welcome To Registration</h5>
        <form action="">
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon type='solid' name='id-card'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Agent Code</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon type='solid' name='user'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Nama</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='envelope' type='solid'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Email</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='phone' type='solid'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Nomor Handphone</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon type='solid' name='map'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Lokasi</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='home' type='solid'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Alamat</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon type='solid' name='paper-plane'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Kodepos</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="text-start mt-4 mb-2" style="color: white;">
                <span>Anda dapat mengundang 1 orang. Silakan isi nama undangan anda.</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon type='solid' name='user'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Nama</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='home' type='solid'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Alamat</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="button">
                <button type="button" class="btn">Preview</button>
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection