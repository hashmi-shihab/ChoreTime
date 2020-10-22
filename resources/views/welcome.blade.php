<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- Bootstrap CSS-->
        <link href="{{ asset('bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap-4.3.1-dist/css/bootstrap-grid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md" style="">
                    <img src="{{asset('Washer-dryer_Lead.jpg')}}" height="600px" width="1345px">
                </div>

                <div class="container-fluid">
                    <h1>NOTICE</h1>
                    <hr style="width: 10%">
                    <div class="card-body" style="background: #b7e2a2;margin: 0px 300px 0px 300px;text-align: left;padding: 5px 0px 5px 0px">
                        <ul style="">
                            <li>Consectetur Morbi sagittis, sem quisci ipsum gravida tortor</li>
                            <li>Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida</li>
                            <li>Consectetur Morbi sagittis, sem quisci ipsum gravida tortor</li>
                            <li>Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida</li>
                            <li>Consectetur Morbi sagittis, sem quisci ipsum gravida tortor</li>
                            <li>Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida</li>
                        </ul>
                    </div>
                    <div class="row" style="margin: 20px 0px 20px 440px">
                        @if (Route::has('login'))
                            @auth
                                <a class="btn btn-outline-info btn-sm col-md-3" style="margin-left: 110px" href="{{ url('/home') }}">Home</a>&nbsp&nbsp
                            @else
                                <a class="btn btn-outline-info btn-sm col-md-3" href="{{ route('login') }}">Login</a>&nbsp&nbsp

                                @if (Route::has('register'))
                                    <a class="btn btn-outline-success btn-sm col-md-3" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                    @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS-->
        <script src="{{asset('bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>
    </body>
</html>
