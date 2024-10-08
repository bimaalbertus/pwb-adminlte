<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    @yield('head')
</head>

<body>
    @include('layout.navbar')
    @include('layout.sidebar')

    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    @include('layout.footer')

    <script src="/dist/js/adminlte.min.js"></script>
    @yield('script')
</body>

</html>
