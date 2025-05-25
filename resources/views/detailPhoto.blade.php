<x-layout>
    <div class="h-screen bg-stone-300">
        <div class="h-1/10"></div>
        <div>
            <h1 class="text-center font-title text-6xl my-4">Dettaglio foto</h1>
            <div class="flex justify-center h-screen">
                <div class="h-1/2 w-1/3">
                <img src="{{$photo['link']}}" alt="img">
                </div>
            </div>
        </div>

    </div>
</x-layout>