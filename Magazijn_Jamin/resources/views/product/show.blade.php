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
        <h1 class="text-3xl font-bold mb-6">Specificatie Geleverde Producten</h1>

        <!-- Details sectie -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Details</h2>
            <div class="space-y-2">
                <p class="text-gray-700"><span class="font-bold">Startdatum:</span> 08-04-2023</p>
                <p class="text-gray-700"><span class="font-bold">Einddatum:</span> 19-04-2023</p>
                <p class="text-gray-700"><span class="font-bold">Productnaam:</span> Minitompjes</p>
                <p class="text-gray-700"><span class="font-bold">Allergenen:</span> Gluten, gelatine, AZO-kleurstof</p>
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
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4 border">18-04-2023</td>
                        <td class="py-3 px-4 border">21</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4 border">09-04-2023</td>
                        <td class="py-3 px-4 border">23</td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Terug-knop -->
            <div class="mt-6">
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                    Terug
                </a>
            </div>
        </div>
    </div>
</body>
</html>
