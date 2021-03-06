<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/gif">

    @include('front.styles')
    @yield('styles')
</head>
<body>

<div class="page-wrapper">
    @yield('header')
    @yield('content')
    @include('front.footer')
    @yield('footer')
</div>

    @include('front.scripts')
    @yield('scripts')

</body>
</html>