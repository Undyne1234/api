<x-layout>
    <div class="max-w-4xl mx-auto my-10 p-5 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-5">Overwatch Gamemodes</h1>
        @if(count($gamemodes) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($gamemodes as $gamemode)
                    <article class="bg-gray-200 rounded-lg overflow-hidden shadow-md">
                        <div class="p-4">
                            <img src="{{ $gamemode['screenshot'] }}" alt="{{ $gamemode['name'] }} portrait"
                                 class="w-full h-auto rounded-lg">
                        </div>
                        <div class="bg-gray-100 p-4">
                            <h2 class="text-xl font-semibold mb-2">
                                {{ $gamemode['name'] }}
                            </h2>
                            <img src="{{ $gamemode['icon'] }}" alt="{{ $gamemode['name'] }} icon"
                                 class="w-8 h-8 inline-block">
                            <h2 class="text-xl font-semibold mb-2">
                                {{ $gamemode['description'] }}
                            </h2>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">No heroes available.</p>
        @endif
    </div>
</x-layout>
</html>

