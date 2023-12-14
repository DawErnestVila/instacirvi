<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>InstaCirvi - @yield('title')</title>
</head>
<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">InstaCirvi</h1>
            <nav class="flex gap-3">
                <a href="" class="font-bold uppercase text-gray-600">Login</a>
                <a href="" class="font-bold uppercase text-gray-600">Register</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>
        @yield('content')
    </main>
    <footer class="text-center p-5 text-gray-500 font-bold">InstaCirvi - {{ now()->year }}</footer>
</body>
</html>