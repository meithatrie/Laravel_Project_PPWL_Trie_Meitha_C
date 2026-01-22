<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    {{-- Navbar --}}
    @include('components.layout.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>
