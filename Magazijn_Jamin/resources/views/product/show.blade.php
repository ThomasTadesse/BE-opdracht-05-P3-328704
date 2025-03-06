<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specificatie Geleverde Producten</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 underline">Specificatie Geleverde Producten</h1>

        <!-- Details sectie -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <div class="space-y-2">
                <p class="text-gray-700"><span class="font-bold">Startdatum:</span> {{ $startDate ?? 'Geen datum geselecteerd' }}</p>
                <p class="text-gray-700"><span class="font-bold">Einddatum:</span> {{ $endDate ?? 'Geen datum geselecteerd' }}</p>
                <p class="text-gray-700"><span class="font-bold">Productnaam:</span> {{ $productName }}</p>
                <p class="text-gray-700">
                    <span class="font-bold">Allergenen:</span> 
                    @foreach($uniqueAllergenen as $product)
                        {{ $product->AllergeenNaam }}@if(!$loop->last), @endif
                    @endforeach
                </p>
            </div>
        </div>

        <!-- Leveringsgegevens tabel -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Leveringsgegevens</h2>
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-400 text-white">
                        <th class="py-3 px-4 text-left border">Datum levering</th>
                        <th class="py-3 px-4 text-left border">Aantal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($uniqueDeliveries as $product)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4 border">{{ date('d-m-Y', strtotime($product->DatumLevering)) }}</td>
                        <td class="py-3 px-4 border">{{ $product->Aantal }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <!-- Terug-knop -->
            <div class="mt-6">
                <a href="{{ url()->previous() }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                    Terug
                </a>
            </div>
        </div>
    </div>
</body>
</html>
