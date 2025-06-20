

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi Proyecto')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" text-gray-800">
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>
</body>
</html>