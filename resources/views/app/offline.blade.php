@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/offline.css') }}">
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
                <span class="input-group-text" style="width: 170px;">Kota</span>
                <input type="text" class="form-control form-control-sm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='bowl-hot' type='solid'></box-icon></span>
                <label class="input-group-text" for="inputGroupSelect01" style="width: 170px;">Jenis Makanan</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Pilih Jenis Makanan</option>
                    <option value="1">Normal</option>
                    <option value="2">Vegetarian</option>
                    <option value="3">No Beef</option>
                    <option value="4">No Seafood</option>
                </select>
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
                <span class="input-group-text"><box-icon name='bowl-hot' type='solid'></box-icon></span>
                <label class="input-group-text" for="inputGroupSelect01" style="width: 170px;">Jenis Makanan</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Pilih Jenis Makanan</option>
                    <option value="1">Normal</option>
                    <option value="2">Vegetarian</option>
                    <option value="3">No Beef</option>
                    <option value="4">No Seafood</option>
                </select>
            </div>
            <div class="button">
                <button type="button" class="btn btn-secondary">Preview</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection