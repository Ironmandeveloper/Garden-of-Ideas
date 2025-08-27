<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sow Your Seeds</title>
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    @stack('styles')
</head>
<body>
    @yield('content')

    @stack('scripts')
</body>
</html>
