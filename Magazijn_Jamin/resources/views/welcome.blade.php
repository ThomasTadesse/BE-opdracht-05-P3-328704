<x-layout>
    <div class="absolute top-0 right-0 m-4">
        Welkom, Manager
    </div>

    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 px-4">
        <h1 class="text-4xl font-bold mb-4">Magazijn Jamin</h1>
        <br>
        <a href="{{ route('allergeen.index') }}" class="bg-green-300 hover:bg-blue-300 text-white font-bold py-2 px-4 rounded">Overzicht Allergenen</a>
    </div>
</x-layout>