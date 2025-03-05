<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductPerLeverancierFactory extends Factory
{
    private static $index = 0;

    private static $productPerLeveranciers = [
        [
            'LeverancierId' => 1,
            'ProductId' => 1,
            'DatumLevering' => '2024-10-09',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2024-10-16',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 1,
            'ProductId' => 1,
            'DatumLevering' => '2024-10-18',
            'Aantal' => 21,
            'DatumEerstVolgendeLevering' => '2024-10-25',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 1,
            'ProductId' => 2,
            'DatumLevering' => '2024-10-09',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2024-10-16',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 1,
            'ProductId' => 3,
            'DatumLevering' => '2024-10-10',
            'Aantal' => 11,
            'DatumEerstVolgendeLevering' => '2024-10-17',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 2,
            'ProductId' => 4,
            'DatumLevering' => '2024-10-14',
            'Aantal' => 16,
            'DatumEerstVolgendeLevering' => '2024-10-21',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 2,
            'ProductId' => 4,
            'DatumLevering' => '2024-10-21',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2024-10-28',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 2,
            'ProductId' => 5,
            'DatumLevering' => '2024-10-14',
            'Aantal' => 45,
            'DatumEerstVolgendeLevering' => '2024-10-21',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 2,
            'ProductId' => 6,
            'DatumLevering' => '2024-10-14',
            'Aantal' => 30,
            'DatumEerstVolgendeLevering' => '2024-10-21',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 3,
            'ProductId' => 7,
            'DatumLevering' => '2024-10-12',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2024-10-19',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 3,
            'ProductId' => 7,
            'DatumLevering' => '2024-10-19',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => '2024-10-26',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 3,
            'ProductId' => 8,
            'DatumLevering' => '2024-10-10',
            'Aantal' => 12,
            'DatumEerstVolgendeLevering' => '2024-10-17',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 3,
            'ProductId' => 9,
            'DatumLevering' => '2024-10-11',
            'Aantal' => 1,
            'DatumEerstVolgendeLevering' => '2024-10-18',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 4,
            'ProductId' => 10,
            'DatumLevering' => '2024-10-16',
            'Aantal' => 24,
            'DatumEerstVolgendeLevering' => '2024-10-30',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 5,
            'ProductId' => 11,
            'DatumLevering' => '2024-10-10',
            'Aantal' => 47,
            'DatumEerstVolgendeLevering' => '2024-10-17',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 5,
            'ProductId' => 11,
            'DatumLevering' => '2024-10-19',
            'Aantal' => 60,
            'DatumEerstVolgendeLevering' => '2024-10-26',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 5,
            'ProductId' => 12,
            'DatumLevering' => '2024-10-11',
            'Aantal' => 45,
            'DatumEerstVolgendeLevering' => null,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 5,
            'ProductId' => 13,
            'DatumLevering' => '2024-10-12',
            'Aantal' => 23,
            'DatumEerstVolgendeLevering' => null,
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'LeverancierId' => 7,
            'ProductId' => 14,
            'DatumLevering' => '2024-10-13',
            'Aantal' => 20,
            'DatumEerstVolgendeLevering' => null,
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
        $productPerLeverancier = self::$productPerLeveranciers[self::$index];
        self::$index = (self::$index + 1) % count(self::$productPerLeveranciers);
        return $productPerLeverancier;
    }
}
