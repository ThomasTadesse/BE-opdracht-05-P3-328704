<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Allergeen;
use App\Models\Task;


class ProductPerAllergeen extends Model
{
    use HasFactory;

    protected $table = 'ProductPerAllergeen';
    
    protected $primaryKey = 'Id';
    
    public $timestamps = false;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId', 'Id');
    }

    public function allergeen()
    {
        return $this->belongsTo(Allergeen::class, 'AllergeenId', 'Id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
