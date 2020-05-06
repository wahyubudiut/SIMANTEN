<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sertifikat</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <style>
        html,body{
            margin: 0 auto;
        }
        #app{
            
            width:1123px;
            height:768px;
            background-size:cover;
            background-repeat:no-repeat;
            margin: 0 auto;
            /* padding-left: -20px; */
        }
    </style>
</head>
<body>
    <div >
     
      <img id="app" src="{{URL::asset('/images/Certificate/'.$code.'.jpg')}}">
    </div>
<script>

</script>
</body>
</html>

