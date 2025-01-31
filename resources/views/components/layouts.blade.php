<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Virtual-Tour | Toraja</title>
</head>
<body class="font-space">
<x-navbar></x-navbar>

    <main class="overflow-hidden">
        {{ $slot }}
    </main>

    <footer class="bg-white shadow dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="/" class="hover:underline">Toraja™</a>. Virtual Tour Indonesia.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="/" class="hover:underline me-4 md:me-6">Home</a>
            </li>
            <li>
                <a href="/wisata" class="hover:underline me-4 md:me-6">Deskripsi Wisata</a>
            </li>
            <li>
                <a href="virtual-tour" class="hover:underline me-4 md:me-6">Virtual Tour</a>
            </li>
        </ul>
        </div>
    </footer>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>