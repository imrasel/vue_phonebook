<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body{
            background: #004d4d;
            height: 100vh;
        }
        .panel-block{
            background: #fff;
        }
    </style>
</head>
<body>
    
    <div id="app">
        
            <div class="container">
                <Myheader></Myheader>
                <router-view></router-view>
                
            </div>
        <Myfooter></Myfooter>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
{{--     <script>
      function closeModal(){
        var element = document.getElementById("showModal");
        element.classList.remove('is-active');
      }
    </script> --}}
</body>
</html>