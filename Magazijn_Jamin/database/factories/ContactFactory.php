<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    private static $index = 0;

    private static $contacts = [
        [
            'Straat' => 'Van Gilslaan',
            'Huisnummer' => '34',
            'Postcode' => '1045CB',
            'Stad' => 'Hilvarenbeek',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Straat' => 'Den Dolderpad',
            'Huisnummer' => '2',
            'Postcode' => '1067RC',
            'Stad' => 'Utrecht',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Straat' => 'Fredo Raalteweg',
            'Huisnummer' => '257',
            'Postcode' => '1236OP',
            'Stad' => 'Nijmegen',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Straat' => 'Bertrand Russellhof',
            'Huisnummer' => '21',
            'Postcode' => '2034AP',
            'Stad' => 'Den Haag',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Straat' => 'Leon van Bonstraat',
            'Huisnummer' => '213',
            'Postcode' => '145XC',
            'Stad' => 'Lunteren',
            'IsActief' => 1,
            'Opmerkingen' => null,
            'DatumAangemaakt' => '2024-11-22 00:00:00',
            'DatumGewijzigd' => '2024-11-22 00:00:00',
        ],
        [
            'Straat' => 'Bea van Lingenlaan',
            'Huisnummer' => '234',
            'Postcode' => '2197FG',
            'Stad' => 'Sint Pancras',
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
        $contact = self::$contacts[self::$index];
        self::$index = (self::$index + 1) % count(self::$contacts);
        return $contact;
    }
}
