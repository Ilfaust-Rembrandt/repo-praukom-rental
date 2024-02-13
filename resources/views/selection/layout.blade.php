<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield()</title>
    @vite(['resources/js/app', 'resources/css/app.css'])
</head>
<body>
    @yield()
    @yield('content')
</body>
</html>