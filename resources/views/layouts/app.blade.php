<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Projeto Laravel')</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('dist/assets/css/app-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/icons-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/icons.min.css') }}">
</head>
<body>
    @yield('content')

    <!-- Scripts JS -->
    <script src="{{ asset('dist/assets/js/pages/app.js') }}"></script>
</body>
</html>
