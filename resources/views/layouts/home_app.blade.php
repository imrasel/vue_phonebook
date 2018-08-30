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
            


                    <!-- <div class="col-lg-3">
                        <ul class="list-group">
                            

                            <li class="list-group-item">
                                <a href="/about"><i class="fa fa-address-book"></i> &nbsp;About</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/student"><i class="fa fa-user-o"></i> &nbsp;Student</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/faculty"><i class="fa fa-university"></i> &nbsp;Faculty</a>
                            </li>

                            <li class="list-group-item">
                                <a href="/librarian"><i class="fa fa-book"></i> &nbsp;Librarian</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/admin"><i class="fa fa-male"></i> &nbsp;Admin</a>
                            </li>
                        </ul>
                    </div> -->

                 @yield('content')

           
        </div>