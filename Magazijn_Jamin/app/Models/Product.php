<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Task;
use App\Models\Magazijn;
use App\Models\ProductPerLeverancier;
use App\Models\ProductPerAllergeen;

class Product extends Model
{
    use HasFactory;

    protected $table = 'Product';

    protected $primaryKey = 'Id'; 

    public $timestamps = false;

    protected $guarded = [];

    public function magazijn()
    {
        return $this->hasOne(Magazijn::class, 'productId', 'Id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function productPerLeverancier()
    {
        return $this->hasMany(ProductPerLeverancier::class, 'ProductId', 'Id');
    }

    public function productPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class, 'ProductId', 'Id');
    }
}
