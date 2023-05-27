<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>

    <!-- Styles --->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    
    <!-- Scripts --->
    @wireUiScripts
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    @livewireScripts
</body>
</html>