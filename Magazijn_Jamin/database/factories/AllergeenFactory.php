<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Allergeen;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AllergeenFactory extends Factory
{
    private static $index = 0;

    private static $allergenen = [
        [
            'Naam' => 'Gluten',
            'Omschrijving' => 'Dit product bevat gluten',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Gelatine',
            'Omschrijving' => 'Dit product bevat gelatine',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'AZO-Kleurstof',
            'Omschrijving' => 'Dit product bevat AZO-kleurstoffen',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Lactose',
            'Omschrijving' => 'Dit product bevat lactose',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Soja',
            'Omschrijving' => 'Dit product bevat soja',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $allergeen = self::$allergenen[self::$index];
        self::$index = (self::$index + 1) % count(self::$allergenen);
        return $allergeen;
    }
}
