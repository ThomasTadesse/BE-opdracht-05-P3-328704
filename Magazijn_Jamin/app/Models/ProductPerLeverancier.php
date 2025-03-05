<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Leverancier;
use App\Models\Product;

class ProductPerLeverancier extends Model
{
    use HasFactory;

    protected $table = 'ProductPerLeverancier'; // Ensure the table name is correct

    protected $primaryKey = 'Id'; // Ensure the primary key is correct

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'LeverancierId',
        'ProductId',
        'DatumLevering',
        'Aantal',
        'DatumEerstVolgendeLevering'
    ];

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'LeverancierId', 'Id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId', 'Id');
    }
}
