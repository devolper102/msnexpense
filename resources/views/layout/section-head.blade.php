<head>
    <meta charset="utf-8" />
    <title>
        MsnExpense - @yield('title')
    </title>
    <meta name="description" content="OrderCircle">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="{{asset('theme/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>