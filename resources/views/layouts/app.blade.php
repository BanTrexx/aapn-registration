<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AAPN 2024 | Registration</title>
        <link rel="stylesheet" href="{{ asset('dist/css/layout.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        @stack('styles')
    </head>
    <body>
        <div class="container text-center">
            <div class="row p-3">
                <div class="col-3 text-start">
                    <img class="logo" src="{{ asset('dist/img/allianz.png') }}" alt="">
                </div>
                <div class="col-4 offset-5 text-end">
                    <img class="logo" src="{{ asset('dist/img/asn.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            @yield('container')
        </div>

        <div class="footer text-center">
            <div id="footer-row" class="row align-items-center" style="height: 100px; max-width: 100%;">
                <div class="col-8 offset-2">
                    <h5 class="footer-text">Allianz Indonesia | Spectrum of Wonder</h5>
                </div>
                <div class="col-2">
                    <div class="helpdesk-btn">
                        <div id="helpdesk">
                            <img class="helpdesk-img" src="{{ asset('dist/img/helpdesk.png') }}" alt="">
                            <p class="helpdesk">Helpdesk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>