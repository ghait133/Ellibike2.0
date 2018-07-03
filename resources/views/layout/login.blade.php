<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">


    <!-- CSRF Token -->


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="/ellibike/public/css/app.css" rel="stylesheet">

</head>

<!-- end::Body -->
<body>



@yield('content')


<!-- Scripts -->
<script></script>
</body>
</html>
