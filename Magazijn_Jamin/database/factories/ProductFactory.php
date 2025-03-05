<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    private static $index = 0;

    private static $products = [
        [
            'Naam' => 'Mintnopjes',
            'Barcode' => '8719587231278',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Schoolkrijt',
            'Barcode' => '8719587326713',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Honingdrop',
            'Barcode' => '8719587327836',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Zure Beren',
            'Barcode' => '8719587321441',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Cola Flesjes',
            'Barcode' => '8719587321237',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Turtles',
            'Barcode' => '8719587322245',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Witte Muizen',
            'Barcode' => '8719587328256',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Reuzen Slangen',
            'Barcode' => '8719587325641',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Zoute Rijen',
            'Barcode' => '8719587322739',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Winegums',
            'Barcode' => '8719587327527',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Drop Munten',
            'Barcode' => '8719587322345',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Kruis Drop',
            'Barcode' => '8719587322265',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Zoute Ruitjes',
            'Barcode' => '8719587323256',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Naam' => 'Drop ninja’s',
            'Barcode' => '8719587323277',
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
        $product = self::$products[self::$index];
        self::$index = (self::$index + 1) % count(self::$products);
        return $product;
    }
}
