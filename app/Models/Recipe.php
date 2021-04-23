<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RecipeList;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'meal_id',
        'list_id'
    ];

    public function lists()
    {
        return $this->hasOne(RecipeList::class);
    }
}
