@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/offline.css') }}">
@endpush

@section('container')
<div class="row text-center justify-content-center">
    <div class="validation-form">
        <h5>Welcome To Registration</h5>
        <form method="POST" action="/registration/{{ $user->agent_code }}">
            @method('PUT')
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon type='solid' name='id-card'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Agent Code</span>
                <input required type="text" name="agent_code" id="agent_code" class="form-control form-control-sm" value="{{ $user->agent_code }}" readonly>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon type='solid' name='user'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Nama</span>
                <input required type="text" name="name" id="name" class="form-control form-control-sm" value="{{ $user->name }}" readonly>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='envelope' type='solid'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Email</span>
                <input required type="text" name="email" id="email" class="form-control form-control-sm" value="{{ $user->email }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='phone' type='solid'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Nomor Handphone</span>
                <input required type="text" name="phone" id="phone" class="form-control form-control-sm" value="{{ $user->phone }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon type='solid' name='map'></box-icon></span>
                <span class="input-group-text" style="width: 170px;">Kota</span>
                <input required type="text" name="address" id="address" class="form-control form-control-sm" value="{{ $user->address }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='bowl-hot' type='solid'></box-icon></span>
                <label class="input-group-text" for="food" style="width: 170px;">Jenis Makanan</label>
                <select class="form-select" name="food" id="food">
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
                <input required type="text" name="partner" id="partner" class="form-control form-control-sm" value="{{ $user->partner }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><box-icon name='bowl-hot' type='solid'></box-icon></span>
                <label class="input-group-text" for="partner_food" style="width: 170px;">Jenis Makanan</label>
                <select class="form-select" name="partner_food" id="partner_food">
                    <option value="1">Normal</option>
                    <option value="2">Vegetarian</option>
                    <option value="3">No Beef</option>
                    <option value="4">No Seafood</option>
                </select>
            </div>
            <div class="button">
                <button type="button" class="btn" onclick="preview()">Preview</button>
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    function preview(){
        document.getElementById("email").readOnly = true;
        document.getElementById("address").readOnly = true;
        document.getElementById("phone").readOnly = true;
        document.getElementById("food").disabled = true;
        document.getElementById("partner").readOnly = true;
        document.getElementById("partner_food").disabled = true;

        document.querySelector('.button').innerHTML = '<button class="btn" onClick="back()">Back</button>';
    }
    
    function back(){
        document.getElementById("email").readOnly = false;
        document.getElementById("address").readOnly = false;
        document.getElementById("phone").readOnly = false;
        document.getElementById("food").disabled = false;
        document.getElementById("partner").readOnly = false;
        document.getElementById("partner_food").disabled = false;

        document.querySelector('.button').innerHTML = '<button type="button" class="btn" onclick="preview()">Preview</button><button type="submit" class="btn">Submit</button>';
    }
</script>
@endsection