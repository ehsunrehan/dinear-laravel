<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'model',
        'ingredients',
        'recommended_food_id',
        'status'

    ];

    public function recommendedFood()
{
    return $this->belongsTo(Food::class,'recommended_food_id');
}

}
