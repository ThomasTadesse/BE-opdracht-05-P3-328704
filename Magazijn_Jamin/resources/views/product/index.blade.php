<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Geleverde Producten</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 underline">Overzicht Geleverde Producten</h1>
        
        <!-- Dropdown en Knop -->
        <div class="flex space-x-4 mb-8">
            <form action="{{ route('product.index') }}" method="GET" class="flex space-x-4">
               
            <!-- Dropdown voor startdatum & einddatum -->
                
                

                <!-- Maak Selectie Knop -->
                <button type="submit" class="bg-blue-300 text-white px-4 py-2 rounded-lg shadow hover:bg-green-300">
                    Maak selectie
                </button>
            </form>
        </div>

        <!-- Tabel voor Overzicht Producten -->
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-400 text-white">
                    <th class="py-3 px-4 text-left">Naam Leverancier</th>
                    <th class="py-3 px-4 text-left">Contactpersoon</th>
                    <th class="py-3 px-4 text-left">Productnaam</th>
                    <th class="py-3 px-4 text-left">Totaal Geleverd</th>
                    <th class="py-3 px-4 text-left">Specificatie</th>
                </tr>
            </thead>
            <tbody>
                @foreach($producten as $product)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $product->LeverancierNaam }}</td>
                        <td class="py-3 px-4">{{ $product->Contactpersoon }}</td>
                        <td class="py-3 px-4">{{ $product->ProductNaam }}</td>
                        <td class="py-3 px-4">{{ $product->AantalAanwezig }}</td>
                        <td class="py-3 px-4">
                            <a href="{{ route('product.show', $product->Id) }}" class="text-blue-500 hover:text-blue-700 text-xl">❔</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>