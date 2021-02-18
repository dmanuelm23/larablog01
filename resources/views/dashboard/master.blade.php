<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Módulo administrativo</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('dashboard.partials.nav-header-main')
    <div class="container">
        @include('dashboard.partials.validation-error')
        @include('dashboard.partials.session-flash-status')
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>