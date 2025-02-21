<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default title' }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>

<body class="flex flex-col min-h-screen" data-status="{{ session('status') }}">
    @include('partials.navigation')

    @if (session('status'))
    <div class="alert alert-success text-center py-2 bg-green-500 text-white">
        {{ session('status') }}
    </div>
    @endif

    <div class="flex-grow">
        {{ $slot }}
    </div>

    @if (isset($sidebar))
    <div id="sidebar" class="p-4 bg-gray-100 border-l">
        <h3 class="font-bold text-lg">Sidebar</h3>
        <div>{{ $sidebar }}</div>
    </div>
    @endif

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/js/swal.js')
</body>

</html>