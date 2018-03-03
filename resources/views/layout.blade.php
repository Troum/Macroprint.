<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href={{asset('/css/styles.css')}}>
        <title>Макропринт</title>
    </head>
    <body>
        @include('parts.header')
        @yield('content')
        @include('parts.footer')
        @include('parts.scripts')
    </body>
</html>
