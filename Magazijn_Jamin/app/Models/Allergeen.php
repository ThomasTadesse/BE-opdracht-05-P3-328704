<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProductPerAllergeen;
use App\Models\Product;
use App\Models\Task;


class Allergeen extends Model
{
    use HasFactory;

    protected $table = 'Allergeen';
    
    protected $primaryKey = 'Id';
    
    public $timestamps = false;

    protected $guarded = [];

    public function productPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class, 'AllergeenId', 'Id');
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, 'ProductPerAllergeen', 'AllergeenId', 'ProductId');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
