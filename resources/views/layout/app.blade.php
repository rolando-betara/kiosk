<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KIOSK</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">

        {{-- <link href="/css/foundation.min.css" rel="stylesheet" type="text/css">
        <link href="/css/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css">
        <link href="/css/foundation-datepicker.css" rel="stylesheet" type="text/css"> --}}
        <link href="/css/main.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
       @section('content')
        @show
    </body>
    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    {{-- <script src="/js/foundation.min.js"></script>
    <script src="/js/foundation-datepicker.js"></script> --}}
    <script src="/js/main.js"></script>
</html>
