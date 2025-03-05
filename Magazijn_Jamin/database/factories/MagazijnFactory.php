<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Magazijn;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Magazijn>
 */
class MagazijnFactory extends Factory
{
    protected $model = Magazijn::class;

    private static $index = 0;

    private static $magazijnen = [
        [
            'ProductId' => 1,
            'VerpakkingsEenheid' => 5,
            'AantalAanwezig' => 453,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 2,
            'VerpakkingsEenheid' => 2.5,
            'AantalAanwezig' => 400,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 3,
            'VerpakkingsEenheid' => 5,
            'AantalAanwezig' => 1,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 4,
            'VerpakkingsEenheid' => 1,
            'AantalAanwezig' => 800,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 5,
            'VerpakkingsEenheid' => 3,
            'AantalAanwezig' => 234,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 6,
            'VerpakkingsEenheid' => 2,
            'AantalAanwezig' => 345,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 7,
            'VerpakkingsEenheid' => 1,
            'AantalAanwezig' => 795,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 8,
            'VerpakkingsEenheid' => 10,
            'AantalAanwezig' => 233,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 9,
            'VerpakkingsEenheid' => 2.5,
            'AantalAanwezig' => 123,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 10,
            'VerpakkingsEenheid' => 3,
            'AantalAanwezig' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 11,
            'VerpakkingsEenheid' => 2,
            'AantalAanwezig' => 367,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 12,
            'VerpakkingsEenheid' => 1,
            'AantalAanwezig' => 467,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 13,
            'VerpakkingsEenheid' => 5,
            'AantalAanwezig' => 20,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ProductId' => 14,
            'VerpakkingsEenheid' => 5,
            'AantalAanwezig' => 0,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ]
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $magazijn = self::$magazijnen[self::$index];
        self::$index = (self::$index + 1) % count(self::$magazijnen);
        return $magazijn;
    }
}
