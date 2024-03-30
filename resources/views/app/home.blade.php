@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('dist/css/home.css') }}">
@endpush

@section('container')
<div class="row text-center">
    <div class="align-items-center justify-content-center" >
        <img class="header-img" src="{{ asset('dist/img/header.png') }}" alt="">
    </div>
</div>
<div id="boxform" class="row text-center">
    <div class="boxform">
        <div class="row" id="welcome">
            <h5>Welcome To Registration</h5>
        </div>
        <div class="row">
            <form action="">
                <div style="margin-top: 5px;" class="row justify-content-center">
                    <div class="row justify-content-center" id="inner-border">
                        <input type="text" class="form-control w-75" placeholder="Agent Code">
                        <label for="floatingInput" style="color: black;">Agent Code</label>
                        <button type="submit" class="submit">Apply Code</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>
<div class="row">
    <div class="countdown">
        <div>
            <span>Days</span>
            <p id="days">00</p>
        </div>
        <div>
            <span>Hours</span>
            <p id="hours">00</p>
        </div>
        <div>
            <span>Minutes</span>
            <p id="minutes">00</p>
        </div>
        <div>
            <span>Seconds</span>
            <p id="seconds">00</p>
        </div>
        <br>
    </div>
    <div class="footnote text-center" style="color: white;">Live video from our special event will be right here. So sit back and relax.</div>
</div>

<script>
    var countdown = new Date("May 2, 2024 20:00:00").getTime();
    var x = setInterval(() => {
        var now = new Date().getTime();
        var distance = countdown - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;
    }, 1000);
</script>
@endsection