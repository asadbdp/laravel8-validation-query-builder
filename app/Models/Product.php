<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function material(){
        return $this->belongsToMany(Material::class, 'product_material', 'product_id', 'material_id', 'id', 'id');
    }
}
