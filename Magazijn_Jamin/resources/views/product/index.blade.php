<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergenen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Overzicht Allergenen</h1>
        
        <!-- Dropdown en Knop -->
        <div class="flex space-x-4 mb-8">
            <form action="{{ route('allergeen.index') }}" method="GET" class="flex space-x-4">
                <!-- Dropdown voor Allergenen -->
                <p class="bold text-xl">Allergenen:</p>
                <select name="filter" class="p-2 border border-gray-300 rounded-lg shadow-sm">
                    <option value="">Alle allergenen</option>
                    @foreach($uniqueAllergenen as $naam)
                        <option value="{{ $naam }}" {{ request('filter') == $naam ? 'selected' : '' }}>
                            {{ $naam }}
                        </option>
                    @endforeach
                </select>

                <!-- Maak Selectie Knop -->
                <button type="submit" class="bg-blue-300 text-white px-4 py-2 rounded-lg shadow hover:bg-green-300">
                    Maak selectie
                </button>
            </form>
        </div>

        <!-- Tabel voor Overzicht Allergenen -->
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-400 text-white">
                    <th class="py-3 px-4 text-left">Naam Product</th>
                    <th class="py-3 px-4 text-left">Naam Allergeen</th>
                    <th class="py-3 px-4 text-left">Omschrijving</th>
                    <th class="py-3 px-4 text-left">Aantal Aanwezig</th>
                    <th class="py-3 px-4 text-left">Info</th>
                </tr>
            </thead>
            <tbody>
            @foreach($allergenen as $allergeen)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $allergeen->ProductNaam }}</td>
                        <td class="py-3 px-4">{{ $allergeen->AllergeenNaam }}</td>
                        <td class="py-3 px-4">{{ $allergeen->Omschrijving }}</td>
                        <td class="py-3 px-4">{{ $allergeen->AantalAanwezig }}  </td>
                        <td class="py-3 px-4">
                            <a href="{{ route('allergeen.show', $allergeen->Id) }}" class="text-blue-500 hover:text-blue-700 text-xl">❔</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>