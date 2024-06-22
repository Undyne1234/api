<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch point</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Replace the above CDN link with your own Tailwind CSS file if self-hosted -->
</head>



<body class="bg-gray-100 text-gray-900">
<header class="bg-white border-b-2 border-black fixed top-0 left-0 right-0 z-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between py-4">
            <!-- Logo and Website Name -->
            <a href="/" class="flex items-center space-x-2">
                <img src="{{asset('/images/overwatchlogo.png')}}" alt="Logo" class="h-8">
                <span class="text-lg font-semibold">Watch point</span>
            </a>

            <!-- Navigation Links -->
            <div class="space-x-4">
                <a href="/heroes" class="hover:text-gray-300">Heroes</a>
                <a href="/maps" class="hover:text-gray-300">Maps</a>
                <a href="/gamemodes" class="hover:text-gray-300">Game Modes</a>
            </div>
        </nav>
    </div>
</header>
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    {{ $slot }}
</div>
</body>
</html>
