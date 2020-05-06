<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <style>
        /* html,body{
                   } */
        #app{
            border: 1px solid black;
            height: 767px;
            width: 1330px;
            /* margin: 0 auto; */
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

        .message {
                font-size: 18px;
                text-align: center;
                
            }
    </style>
</head>
<body>
    <div >
    @if($count > 0)
     @foreach($data as $d)
        <img  id="app" src="../images/Certificate/{{ str_replace('/','-',$d->code)}}.jpg" alt="">
    @endforeach
    @else
    <div class="flex-center position-ref full-height">
        <div class="message">
            DATA NOT FOUND !!
        </div>
     </div>   
    @endif    
    </div>
<script>

</script>
</body>
</html>

