<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Task')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gray-900">
    

    <!-- Flash messages -->
    {{-- @include('partials.flash') --}}

    <!-- Main Content -->
    <main class="pt-20 md:pt-15">
        @yield('content')
    </main>

   

    @stack('scripts')

</body>

</html>