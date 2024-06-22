<x-layout>
    <div class="max-w-4xl mx-auto my-10 p-5 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-5">Overwatch Heroes</h1>
        @if(count($heroes) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($heroes as $hero)
                    <article class="bg-gray-200 rounded-lg overflow-hidden shadow-md">
                        <div class="p-4">
                            <img src="{{ $hero['portrait'] }}" alt="{{ $hero['name'] }} portrait" class="w-full h-auto rounded-lg">
                        </div>
                        <div class="bg-gray-100 p-4">
                            <h2 class="text-xl font-semibold mb-2">
                                {{ $hero['name'] }}
                            </h2>
                            <p><strong>Role:</strong> {{ $hero['role'] }}</p>
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
