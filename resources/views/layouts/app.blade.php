<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href={{ URL::asset('vendors/css/bootstrap.min.css') }} >
        <link href={{ URL::asset('vendors/css/font-awesome.min.css') }} rel="stylesheet" >
        <script src={{ URL::asset('vendors/js/jquery-3.2.1.min.js') }} ></script>
        <script src={{ URL::asset('vendors/js/bootstrap.min.js') }}></script>

        <!-- Styles -->
     <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>

    </head>
    <body>
        <div class="container">
            <div class="row">


                    <div class="col-lg-3">
                        @yield('aside')
                    </div>

                

                <div class="col-lg-9">
                    @yield('content')
                </div>
            </div>
        </div>