<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | WireUI</title>

    <!-- Styles --->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="dark:bg-gray-900">
    
    @yield('content')
    
    <!-- Scripts --->
    @wireUiScripts
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    @livewireScripts
</body>
</html>