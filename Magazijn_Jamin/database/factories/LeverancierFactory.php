<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Leverancier;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leverancier>
 */
class LeverancierFactory extends Factory
{
    private static $index = 0;

    private static $leveranciers = [
        [
            'ContactId' => 1,
            'Naam' => 'Venco',
            'Contactpersoon' => 'Bert van Linge',
            'Leveranciernummer' => 'L1029384719',
            'Mobiel' => '06-28493827',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ContactId' => 2,
            'Naam' => 'Astra Sweets',
            'Contactpersoon' => 'Jasper del Monte',
            'Leveranciernummer' => 'L1029284315',
            'Mobiel' => '06-39398734',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ContactId' => 3,
            'Naam' => 'Haribo',
            'Contactpersoon' => 'Sven Stalman',
            'Leveranciernummer' => 'L1029324748',
            'Mobiel' => '06-24383291',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ContactId' => 4,
            'Naam' => 'Basset',
            'Contactpersoon' => 'Joyce Stelterberg',
            'Leveranciernummer' => 'L1023845773',
            'Mobiel' => '06-48293823',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ContactId' => 5,
            'Naam' => 'De Bron',
            'Contactpersoon' => 'Remco Veenstra',
            'Leveranciernummer' => 'L1023857736',
            'Mobiel' => '06-34291234',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ContactId' => 6,
            'Naam' => 'Quality Street',
            'Contactpersoon' => 'Johan Nooij',
            'Leveranciernummer' => 'L1029234586',
            'Mobiel' => '06-23458456',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'ContactId' => 7,
            'Naam' => 'Hom Ken Food',
            'Contactpersoon' => 'Hom Ken',
            'Leveranciernummer' => 'L1029234599',
            'Mobiel' => '06-23458477',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ]];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $leverancier = self::$leveranciers[self::$index];
        self::$index = (self::$index + 1) % count(self::$leveranciers);
        return $leverancier;
    }
}
