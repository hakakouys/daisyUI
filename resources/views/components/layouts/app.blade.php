<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel DaisyUI' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-base-200 min-h-screen font-sans">

    <div class="drawer lg:drawer-open">
        <input id="app-drawer" type="checkbox" class="drawer-toggle" />

        <!-- MAIN CONTENT -->
        <div class="drawer-content flex flex-col min-h-screen">
            @include('components.partials.header')

            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>

        <!-- SIDEBAR -->
        <div class="drawer-side z-40">
            <label for="app-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            @include('components.partials.sidebar')
        </div>
    </div>

</body>
</html>